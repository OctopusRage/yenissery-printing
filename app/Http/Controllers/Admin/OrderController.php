<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Utils\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index(Request $request){
        $orders = Order::with(['productsWithDetails', 'user'])->get();
        $statusOrder = ['unpaid', 'on_progress', 'finished'];
        return view('admin.order.index', compact('orders', 'statusOrder'));
    }

    public function updateStatus(Request $request, $id) {
        $request->validate([
            'status' => 'required'
        ]);
        $isStatusValid = Helper::validateOrderStatus($request->status);
        if(!$isStatusValid) {
            return redirect()->back()->withErrors('status tak valid');
        }
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('order.index');

    }

    public function show(Request $request, $id) {
        $order = Order::find($id);
        $orderedProducts = $order->products;
        return view('admin.order.edit', compact('order','orderedProducts'));
    }
}
