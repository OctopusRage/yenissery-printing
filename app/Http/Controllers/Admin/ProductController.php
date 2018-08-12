<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use App\Utils\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'photos'        => 'array|nullable'
        ]);


        DB::beginTransaction();
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            $photos = $request->photos;
            foreach ($photos as $photo) {
                $fileAttachment = Helper::upload($request->file($photo));
                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->file_attachment = $fileAttachment;
                $productImage->save();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response('failed save product');
        }

        DB::commit();
        return response('success');
    }

    public function index(Request $request){
        if(empty($request->limit)) $request->limit = 10;
        $products = Product::paginate($request->limit);
        return view('list of products admin', compact($products));
    }

}
