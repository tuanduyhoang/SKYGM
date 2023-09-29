<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

class OrderController extends Controller
{
    public function  manage_order() {
        $orders = Order::orderby('created_at','DESC')->get();
        return view('admin.orders.manage_order',compact('orders'));
    }
    public function detail(Order $order)  {
        $order = Order::all();
        return view('admin.orders.detail',[

        ]);
    }
}
