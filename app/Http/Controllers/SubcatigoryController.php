<?php

namespace App\Http\Controllers;
use App\Category;
use App\subcatigory;
use Illuminate\Http\Request;

class SubcatigoryController extends Controller
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
        $categorys = Category::all();
        $subcatigory = subcatigory::all();

        return view('dashboard_veiw.manage_sub',compact('categorys','subcatigory'));


    }
    public function validation($request)
    {
        $request->validate([
            'select_category' => 'required',
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
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

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }
        $category = Category::findOrFail($request->input('select_category'));
        $subcatigory = new subcatigory;
        $subcatigory->name = $request->input('name');
        $subcatigory->image = $filename;

        $category->product()->save($subcatigory);
        return redirect('/dashboard/manage_sub');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcatigory  $subcatigory
     * @return \Illuminate\Http\Response
     */
    public function show(subcatigory $subcatigory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcatigory  $subcatigory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcatigory $subcatigory)
    {
        $categorys = Category::all();
        return view('dashboard_veiw.manage_sub_edit',compact('subcatigory','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcatigory  $subcatigory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcatigory $subcatigory)
    {

        $request->validate([
            'select_category' => 'required',
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
        ]);


        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $subcatigory->image;
        }
        $subcatigory = subcatigory::find($subcatigory->id);
        $subcatigory->name = $request->name;
        $subcatigory->image = $filename;
        $subcatigory->category_id=$request->select_category;
         $subcatigory->save();

        return redirect('/dashboard/manage_sub');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcatigory  $subcatigory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcatigory $subcatigory)
    {
        subcatigory::findOrFail($subcatigory->id)->delete();
        return redirect('/dashboard/manage_sub');
    }

    public function subcatView($id){
        $subcatigory= Category::find($id)->subcatigory;
        //return subcatigory::find(2)->maincatigory;

        // $subcatigory=subcatigory::all();
        return view('pub_veiw.sub_home',compact('subcatigory'));

    }



}
