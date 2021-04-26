<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class DOrdersController extends Controller
{
    public function index()
    {
        $data = Order::latest('id')->with('user')->withCount('items')->paginate(20);
        return view('dashboard_veiw.manage_order', compact('data'));
    }

    public function details($id)
    {
        $data = Order::findOrFail($id);
        $items = $data->items()->with('product')->get();
        return view('dashboard_veiw.manage_order_details', compact('data', 'items'));
    }
}
