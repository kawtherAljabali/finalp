<?php

namespace App\Http\Controllers;

use App\Category;
use App\product;
use App\subcatigory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('dashboard_veiw.manage_category',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }

        $name      = request('name');
        Category::create([
            'name'  => $name,
            'image' => $filename
        ]);
        return redirect('/dashboard/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard_veiw.manage_category_edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name' => 'required',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $category->image;
        }

        $name      = request('name');

        $category=Category::find($category->id);
        $category->name =$name;
        $category->image =$filename;
        $category->save();

        return redirect('/dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/dashboard/category');
    }

    public function categryView(){

        $category=Category::all();
        
        return view('pub_veiw.public_home',compact('category'));

    }
  
    
    public function categdog($id){

        $category=Category::all();
        // $product=product::all();
        $product= subcatigory::find($id)->product;
        // dd($category);
        
         return view('pub_veiw.shop_dog',compact('category','product'));
    }


    public function footer(){

        $category=Category::all();
        
         return view('pub_veiw.public_home',compact('category'));
    }

    public function footer2(){

        $category=Category::all();
        
         return view('pub_layouts.public_main',compact('category'));
    }













    public function categryFind($id){

        $product = product::where('category_id','=',$id)->get();
        
        $category = Category::where('id','=',$id)->first();


        return view('public_veiw.public_category',compact('product','category'));


    }


    

    

}
