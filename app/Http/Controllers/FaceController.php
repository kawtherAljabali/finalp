<?php

namespace App\Http\Controllers;

use App\face;
use Illuminate\Http\Request;

class FaceController extends Controller
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
        $face=face::all();
    return view('pub_veiw.face',compact('face'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }

        $name      = request('post');
        face::create([
            'post'  => $name,
            'image' => $filename
        ]);

        // face::create($request->all());
        return redirect('/face');
    
    }


    public function faceviewdash(){
        $face=face::all();
        return view('dashboard_veiw.manage_public',compact('face'));


    }

    public function destroy(face $face)
    {
        face::findOrFail($face->id)->delete();
        return redirect('/dashboard/manage_public');
    }



    public function faceview(){
        $face=face::all();
        return view('pub_veiw.face',compact('face'));


    }








    /**
     * Display the specified resource.
     *
     * @param  \App\face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(face $face)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(face $face)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\face  $face
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, face $face)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\face  $face
     * @return \Illuminate\Http\Response
     */
    
}
