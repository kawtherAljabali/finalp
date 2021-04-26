<?php

namespace App\Http\Controllers;
use App\Category;
use App\subcatigory;
use App\product;

use Illuminate\Http\Request;

class ProductController extends Controller
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
     * Show the form for creating a new resource.--
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcatigory = subcatigory::all();
        $products = product::all();

        return view('dashboard_veiw.manage_product',compact('subcatigory','products'));


    }
    public function validation($request)
    {
        $request->validate([
            'select_sub' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'price' => 'required',
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
        $subcatigory = subcatigory::findOrFail($request->input('select_sub'));
        $product = new product;
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->priority = $request->input('priority');

        $product->image = $filename;

        $subcatigory->product()->save($product);
        return redirect('/dashboard/manage_product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $subcatigory = subcatigory::all();
        return view('dashboard_veiw.manage_product_edit',compact('product','subcatigory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'select_sub' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
        ]);

        $product = product::find($product->id);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $product->image;
        }

        $product->desc = $request->desc;
        $product->name = $request->name;
        $product->subcatigory_id = $request->select_sub;
        $product->price = $request->price;
        $product->image = $filename;

        $product->save();

        return redirect('/dashboard/manage_product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        product::findOrFail($product->id)->delete();
        return redirect('/dashboard/manage_product');
    }

    public function productView(){

        $product=product::all()->take(4);
        $subcatigory=subcatigory::all();
        $category=Category::all();
        $pro=product::latest()->take(4)->get();

        return view('pub_veiw.public_home',compact('product','subcatigory','category','pro'));

    }

    // public function shopView(){

    //     $product=product::all();

    //     return view('pub_veiw.shop_dog',compact('product'));

    // }


    // public function prodView($id){
    //     $product= subcatigory::find($id)->product;
    //     //return subcatigory::find(2)->maincatigory;

    //     // $subcatigory=subcatigory::all();
    //     return view('pub_veiw.shop_dog',compact('product'));

    // }

    public function search(){
        $search=$_GET['query'];
        $product = product::where('name','LIKE','%'.$search.'%')->get();
        $category=Category::all();
        return view('pub_veiw.search',compact('product','category'));
    }


    public function prodhome($id){
        $product= subcatigory::find($id)->product;
        //return subcatigory::find(2)->maincatigory;

        // $subcatigory=subcatigory::all();
        return view('pub_veiw.public_home',compact('product'));

    }







    public function proddetail($id){

        $product=product::find($id);

        //  $related= product::where('id','=',$id)->first();
        $related= $product->subcat;
        // foreach($related as $x){
        //     echo $x->id;
        // }
        // return $related->products;
        $related_cat = subcatigory::find($product->subcat->id);
        $related_pro = $related_cat->product->where('id','!=',$id);
         //where('id','=',$id)->first();

        return view('pub_veiw.shop_detail',compact('product','related_pro'));

        //return subcatigory::find(2)->maincatigory;

        // $subcatigory=subcatigory::all();

    }




}
