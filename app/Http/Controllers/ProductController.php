<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductsRequest as Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    //

    public function index(){
        $minutes = Carbon::now()->addMinutes(1);
        $all = Cache::remember('api::products', $minutes, function(){
            return Product::all();
        });
        return $all;
    }

    public function store(Request $request){
        Cache::forget('api::products');
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        return Product::create($data);
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return $product;
    }

    public function destroy(Product $product){
        $this->authorize('delete', $product);
        $product->delete();
        return $product;
    }

    public function show(Product $product){
        return $product;
    }

}
