<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Utils\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request){
        $orders = Order::with(['productsWithDetails', 'user']);
        return view('order list admin page', compact($orders));
    }

    public function updateStatus(Request $request, $id) {
        $request->validate([
            'status' => 'required'
        ]);
        $isStatusValid = Helper::validateOrderStatus($request->status);
        if(!$isStatusValid) {
            return response('gagal update status ');
        }
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return response('ok');

    }

    public function show(Request $request, $id) {
        $order = Order::find($id);
        $orderedProducts = $order->products;
        return view('order detail', compact($order, $orderedProducts));
    }
}
