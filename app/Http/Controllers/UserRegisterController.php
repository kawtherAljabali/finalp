<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Booking;
use App\place;
use App\Room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function validation($request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:8|max:16|confirmed',
            'password_confirmation' =>'required',
           // 'mobile' => 'required | Digits:14'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
//        User::create($request->all());
         $user = new User();
        // Admin::create($request->all());
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->password =Hash::make($request->input('password'));
       // $user->mobile =$request->input('mobile');
        $user->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }

    public function profile($id)
    {
        $user = User::where('id','=',$id)->first();
        $bookings = Booking::where('user_id','=',$id)->get();
        $booking = Booking::where('user_id','=',$id)->first();
        if($booking){
            $room_name = $booking->room_id;
        }else{
            $room_name = "null";
        }
        $room = Room::where('id','=',$room_name)->first();
        if($room){
            $place_id = $room->place_id;
        }else{
            $place_id = "null";
        }

        $place_row = place::where('id','=',$place_id)->get()->first();

//        $place_name = $place_row->name;

        return view('public_veiw.Profile',compact('user','bookings','room','place_row'));
    }

    public function editprofile($id)
    {
        $user = User::where('id','=',$id)->get()->first();
        return  view('public_veiw.edit_profile',compact('user'));
    }
}
