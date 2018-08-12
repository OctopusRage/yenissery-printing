<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;
use App\Utils\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('pay');
    }


    // kudu login
    public function create(Request $request){
        $request->validate([
            'description'               => 'required',
            'file_attachment'           => 'required',
            'finished_at_request'       => 'nullable',
            'quantity'                  => 'required',
            'product_id'                => 'product_id',
        ]);
        $user = Auth::user();

        $product = Product::find($request->product_id);
        if(empty($product)) {
            return view('order gagal view');
        }

        DB::beginTransaction();
        try {
            $order = new Order();
            $order->user_id     = $user->id;
            $order->quantity    = $request->quantity;
            $order->save();

            $orderProduct               = new OrderProduct();
            $orderProduct->order_id     = $order->id;
            $orderProduct->product_id   = $request->product_id;
            $orderProduct->quantity     = $request->quantity;
            $orderProduct->descriptions = $request->description;
            $orderProduct->file_attachment = Helper::upload($request->file('file_attachment'));
            $orderProduct->save();

            $order->total_price = $request->quantity * $product->price;
            $order->save();
        } catch (\Exception $exception) {
            DB::rollBack();
            //diarahkan ke suatu page gagal
            return response('ke gagal order page');
        }
        DB::commit();
        return response('ke sukses order');

    }

    public function index(Request $request) {
        $products = Product::all();
        $user     = Auth::user();
        $orderedProducts = $user->orders()->with('productsWithDetails');
        return view('order form', compact('products', $orderedProducts));
    }

    public function pay(Request $request) {
        $request->validate([
            'order_id'          => 'required',
            'file_attachment'   => 'required|file'
        ]);

        $order = Order::find($request->order_id);
        if(empty($order)) {
            return response('order not found');
        }

        DB::beginTransaction();
        try {
            $fileAttachment         = $request->file('file_attachment');
            $uploadedFilename       = Helper::upload($fileAttachment);

            $order->status          = 'waiting_confirmation';
            $order->save();

            $payment = new Payment();
            $payment->file_attachment = $uploadedFilename;
            $payment->order_id = $order->id;
            $payment->save();

        } catch (\Exception $e) {
            DB::rollBack();
            return response('to failed page');
        }
        DB::commit();


        return response('ok');
    }
}
