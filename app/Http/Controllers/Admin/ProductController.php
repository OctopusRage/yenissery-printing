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
    public function create(){
        return view('admin.product.create');
    }

    public function edit($product){
        $product = Product::find($product);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'photos'        => 'nullable|file'
        ]);
        $product = Product::find($id);
        DB::beginTransaction();
        try {
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            if($request->hasFile('photos')){
                $photos = $request->file('photos');
                foreach ($photos as $photo) {
                    $fileAttachment = Helper::upload($photo);
                    $productImage = new ProductImage;
                    $productImage->product_id = $product->id;
                    $productImage->file_attachment = $fileAttachment;
                    $productImage->save();
                }
            }

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
        DB::commit();
        return redirect()->route('product.edit', $product->id);
    }

    public function store(Request $request){
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'photos'        => 'nullable'
        ]);


        DB::beginTransaction();
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            if($request->hasFile('photos')){
                $photos = $request->file('photos');
                $primaryUsed = false;
                foreach ($photos as $photo) {
                    $fileAttachment = Helper::upload($photo);
                    $productImage = new ProductImage;
                    if(!$primaryUsed) {
                        $productImage->is_primary_display = true;
                        $primaryUsed = true;
                    }
                    else $productImage->is_primary_display = false;
                    $productImage->product_id = $product->id;
                    $productImage->file_attachment = $fileAttachment;
                    $productImage->save();
                }
            }

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage())->withInput($request->all());
        }

        DB::commit();
        return redirect()->route('product.index');
    }

    public function index(Request $request){
        if(empty($request->limit)) $request->limit = 10;
        $products = Product::paginate($request->limit);
        return view('admin.product.index', compact('products'));
    }

    public function  destroy($id){
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
