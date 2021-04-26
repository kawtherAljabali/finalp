<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\product;

use App\Orderitem;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{

    private function dataCart()
    {
        return json_decode(Cookie::get('shopping_cart'), true);
    }


    public function index()
    {
        $cart_data = $this->dataCart();
        return view('pub_veiw.cheakout', compact('cart_data'));
    }


    public function order()
    {
        $product = product::find(14);
        $user = User::find(1);
        return view('pub_veiw.orderprof', compact('user'));
    }


    public function storeorder(Request $request)
    {
        $cart_data = $this->dataCart();
        if (!$cart_data || !count($cart_data)) return redirect('home');
        // Find User By ID
        $user = User::findOrFail(Auth::id());
        // Set LName
        $user->lname = $request->input('first_name') . ' ' . $request->input('last_name');
        $user->phone = $request->input('phone_no');
        $user->alternate_phone = $request->input('alter_no');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->save();
        $data = [];
        foreach ($cart_data as $key => $get) {
            $product = product::find($get['item_id']);
            if ($product) {
                $data[$key] = [
                    'product_id' => $product->id,
                    'quantity' => $get['item_quantity'],
                    'price' => $get['item_quantity'] * $product->price,
                ];
            } else {
                unset($cart_data[$key]);
                Cookie::queue(Cookie::make('shopping_cart', json_encode($cart_data), 60));
            }
        }
        $store = [
            'user_id' => $user->id,
            'total' => array_sum(array_column($data, 'price'))
        ];
        DB::beginTransaction();
        // Store Data in Order
        $order = Order::create($store);
        // Assign Items To Order
        $order->items()->createMany($data);
        DB::commit();
        // Destroy Cookie
        Cookie::queue(Cookie::forget('shopping_cart'));

        return redirect('/thank-you')->with('status', 'Order has been  successfully');
    }

}

