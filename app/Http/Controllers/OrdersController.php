<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    protected  $paginate = 20;


    public function index()
    {
        $data = Order::where('user_id', auth()->user()->id)->withCount('items')->paginate($this->paginate);
        return view('pub_veiw.orderprof', compact('data'));
    }
}
