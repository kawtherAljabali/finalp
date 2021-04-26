<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/profile', function () {
//    return view('pub_veiw.profile');
// });

Route::get('/', function () {
//$prod = product::find(14);
//$user = User::find(1);
//foreach ($prod->users as $p ) {
//    # code...
//    dd($p->pivot);
//}
});

Route::get('/paradise/contact', function () {
    return view('public_veiw.public_contact');
});
Route::get('/pub', function () {
    return view('pub_layouts.public_main');
});

Route::get('/ppr', function () {
    return view('pub_veiw.ppro');
});

Route::get('/dashboard/mangeorder', 'DOrdersController@index');
Route::get('/dashboard/mangeorder/{id}', 'DOrdersController@details');

// Route::get('/contact', function () {
//     return view('pub_veiw.contact');
// });


Route::post('/contact','contactController@store');
 Route::get('/contact','contactController@create');
 Route::get('/dashboard/msg','contactController@msgview');
 Route::get('/dashboard/msg/{Contact}','contactController@destroy');



 Route::post('/face','FaceController@store');
 Route::get('/face','FaceController@create');
 Route::get('/face','FaceController@faceview');
 Route::get('/dashboard/manage_public','FaceController@faceviewdash');
 Route::get('/dashboard/manage_public{face}','FaceController@destroy');



// Route::get('/orderprf', function () {
//     return view('pub_veiw.orderprof');
// });

// Route::get('/home', function () {
//     return view('pub_veiw.public_home');
// });
// Route::get('/face', function () {
//     return view('pub_veiw.face');
// });

Route::get('/thank-you', function () {
    return view('pub_veiw.thank-you');
});

Route::get('/about', function () {
    return view('pub_veiw.about');
});

Route::get('/cart', function () {
    return view('pub_veiw.cart');
});


Route::group(['middleware' => 'checkadmin'], function () {
    Route::post('/dashboard/admin', 'AdminController@store');
    Route::get('/dashboard/admin', 'AdminController@create');
    Route::get('/dashboard/admin/{admin}', 'AdminController@destroy');
    Route::get('/dashboard/admin/{admin}/edit', 'AdminController@edit');
    Route::Put('/dashboard/admin/{admin}', 'AdminController@update');


//<!--  place [CRUD] -->


//category[CRUD]
    Route::post('/dashboard/category', 'CategoryController@store');
    Route::get('/dashboard/category', 'CategoryController@create');
    Route::get('/dashboard/category/{category}', 'CategoryController@destroy');
    Route::get('/dashboard/category/{category}/edit', 'CategoryController@edit');
    Route::Put('/dashboard/category/{category}', 'CategoryController@update');

//Room[CRUD]


//Image[CRUD]
    Route::get('/dashboard/manage_images', 'ImageController@create');
    Route::post('/dashboard/manage_images', 'ImageController@store');
    Route::get('/dashboard/manage_images/{image}', 'ImageController@destroy');
    Route::get('/dashboard/manage_images/{image}/edit', 'ImageController@edit');
    Route::put('/dashboard/manage_images/{image}', 'ImageController@update');

//User[CRUD]
    Route::get('/dashboard/manage_user', 'AdminController@usersread');
    Route::get('/dashboard/manage_user/{user}/edit', 'AdminController@edituser');
    Route::put('/dashboard/manage_user/{user}', 'AdminController@userupdate');
    Route::get('/dashboard/manage_user/{user}', 'AdminController@userdestroy');

});



// Route::get('/shopdog', function () {
//    return view('pub_veiw.shop_dog');
// });



//public-Theme[Rooms]
Route::get('/paradise/grid-rooms/{id}','RoomController@gridview');

//public-Theme[Place]
Route::get('/paradise/grid-category/{id}','CategoryController@categryFind');

//public-Theme[Farms]
Route::get('/paradise/all-farm','PlaceController@viewallfarm');
Route::get('/paradise/all-farm/{id}','PlaceController@viewfarm');

//public-Theme[Home]
Route::get('/home','CategoryController@categryView');

 Route::get('/shop_dog/{id}','CategoryController@categdog');

Route::get('/home','ProductController@productView');
Route::get('/','ProductController@productView');



Route::get('/sub/{id}','SubcatigoryController@subcatView');





// Route::get('/shop_dog/{id}','ProductController@prodView');// الصفحة الي بعد sub

Route::get('/home/{id}','ProductController@prodhome');// الصفحة الي بعد sub


Route::get('/shop_detail/{id}','ProductController@proddetail');
 //Route::get('/','CategoryController@index');

 Route::get('/orderprf','OrdersController@index');



//public-Theme[Single Room]
Route::get('/paradise/single-room/{id}','RoomController@singleroom');

Auth::routes();
//Route::post('/paradise/register','Auth\RegisterController@register');

//Route::get('/home', 'HomeController@index')->name('home');

//public-Theme[login+register Users]
Route::post('/regester','UserRegisterController@store');
//Route::post('/paradise/login','LoginController@check');
// Route::get('/login','LoginController@index');
// Route::get('/login','LoginController@logout');

//Dashboard-Theme[login]
Route::post('/dashboard/adminlogin','AdminController@check');
Route::get('/dashboard/adminlogin','AdminController@index');
Route::get('/dashboard/adminlogout','AdminController@logout');


//public-Theme[Search]
Route::get('/search','ProductController@search');



Route::get('/paradise/bookingroom/{id}','BookingController@check');


Route::get('/paradise/booking', function () {
    return view('public_veiw.booking_room');
});

Route::post('/paradise/donebooking','BookingController@store');

Route::get('/paradise/profile/{id}','UserRegisterController@profile');
Route::get('/paradise/booking/{booking}','BookingController@destroy');

Route::get('/paradise/editprofile/{id}','UserRegisterController@editprofile');


 Route::get('/testedit', function () {
     return view('dashboard_veiw.manage_user_edit');
 });

 Route::get('/dashboard/manage_product','ProductController@create');
 Route::post('/dashboard/manage_product','ProductController@store');
 Route::get('/dashboard/manage_product/{product}/edit','ProductController@edit');
Route::put('/dashboard/manage_product/{product}','ProductController@update');
Route::get('/dashboard/manage_product/{product}','ProductController@destroy');

Route::get('/dashboard/manage_sub','subcatigoryController@create');
Route::post('/dashboard/manage_sub','subcatigoryController@store');
Route::get('/dashboard/manage_sub/{subcatigory}','subcatigoryController@destroy');
Route::get('/dashboard/manage_sub/{subcatigory}/edit','subcatigoryController@edit');
Route::put('/dashboard/manage_sub/{subcatigory}','subcatigoryController@update');

Route::get('/dashboard/manage_animal','AnimalController@create');
Route::post('/dashboard/manage_animal','AnimalController@store');
Route::get('/dashboard/manage_animal/{animal}','AnimalController@destroy');
Route::get('/dashboard/manage_animal/{animal}/edit','AnimalController@edit');
Route::put('/dashboard/manage_animal/{animal}','AnimalController@update');


    Route::post('add-to-cart','CartController@addtocart');
    Route::get('addcart','CartController@index');
    Route::get('/load-cart-data','CartController@cartloadbyajax');
    Route::post('update-to-cart','CartController@updatetocart');
    Route::delete('delete-from-cart','CartController@deletefromcart');
    Route::get('clear-cart','CartController@clearcart');


    Route::get('checkout','CheckController@index');
    Route::post('place-order','CheckController@storeorder');

    Route::get('profile','ProfileController@index');
    Route::post('profile','ProfileController@storeorder');
Route::get('/userlogout','ProfileController@logout');


//ROZERPAY
    Route::post('/confirm-razorpay-payment','CheckController@checkamount');




