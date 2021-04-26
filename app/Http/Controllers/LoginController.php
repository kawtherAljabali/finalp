<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pub_veiw.login');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function check(Request $request, User $user)
    {

        if(Auth::attempt(['email'=> $request->input('email'), 'password' => $request->input('password')]) && session('usernotlogin') ){$user = User::where('email','=',$request->input('email'))->get()->first();
        $request->session()->put('user', $user->name);
        $request->session()->put('user_id', $user->id);

        return view('pub_veiw.public_home');}

        elseif(Auth::attempt(['email'=> $request->input('email'), 'password' => $request->input('password')])){
            $user = User::where('email','=',$request->input('email'))->get()->first();
            $request->session()->put('user', $user->name);
            $request->session()->put('user_id', $user->id);
            return redirect('/home');
        }else{
            $request->session()->put('Notuser', 'NotUser');
            return redirect('/home');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->forget('user_id');
       

        return redirect()->back();
    }

}
