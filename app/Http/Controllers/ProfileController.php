<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\product;

use App\Orderitem;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data   = json_decode($cookie_data, true);

        return view ('pub_veiw.profile')
              ->with('cart_data',$cart_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function storeorder(Request $requist){
        if(isset($_POST['save_pr'])){

          $user_id=Auth::id();
          $user=User::find($user_id);

          $user->name=$requist->input('first_name');
          $user->lname=$requist->input('last_name');

          $user->phone=$requist->input('phone_no');
          $user->alternate_phone=$requist->input('alter_no');

          $user->address1=$requist->input('address1');
          $user->address2=$requist->input('address2');

          // $user->city=$requist->input('city');
          // $user->state=$requist->input('state');
          $user->password=$requist->input('password');
          $user->save();


          //place order



          Cookie::queue(Cookie::forget('shopping_cart'));

          return redirect('/home')->with('status','profile his update');


     }

  }

  public function logout(Request $request)
{

    $request->session()->invalidate();
    return redirect('/');
}

}
