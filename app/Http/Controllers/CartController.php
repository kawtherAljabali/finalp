<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

use Illuminate\Support\Facades\Cookie;


class CartController extends Controller
{


    private function dataCart()
    {
        //$cookie_data = stripslashes(Cookie::get('shopping_cart'));
        return json_decode(Cookie::get('shopping_cart'), true);
    }


    public function index()
    {
        $cart_data = $this->dataCart();
        return view('pub_veiw.cart', compact('cart_data'));
    }





    public function addtocart(Request $request){
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');



        if(Cookie::get('shopping_cart'))
        {
            $cart_data = $this->dataCart();
        }
        else
        {
            $cart_data = array();
        }


        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status2'=>'2']);
                }
            }
        }
        else
        {
        $products = product::find($prod_id);
        $prod_name = $products->name;
        $prod_image = $products->image;
        $priceval = $products->price;

        if($products)
        {
            $item_array = array(
                'item_id' => $prod_id,
                'item_name' => $prod_name,
                'item_quantity' => $quantity,
                'item_price' => $priceval,
                'item_image' => $prod_image
            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
        }
      }
    }



    public function cartloadbyajax()
    {
        if(Cookie::get('shopping_cart'))
        {
            $cart_data = $this->dataCart();
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
    }

    public function updatetocart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart')){
            $cart_data = $this->dataCart();


            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $prod_id;

            if(in_array($prod_id_is_there, $item_id_list))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $prod_id)
                    {
                        $cart_data[$keys]["item_quantity"] =$quantity;

                        $ttprice=($cart_data[$keys]["item_price"] *$quantity);

                       $grandtotalprice= number_format( $ttprice);

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated','gtprice'=>''.$grandtotalprice.'']);
                    }
                }
            }
        }

    }





    public function deletefromcart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $cart_data = $this->dataCart();


        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }


    public function clearcart()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'Your Cart is Cleared']);
    }
}
