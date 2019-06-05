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
        dump(\Auth::user());
        /*$minutes = Carbon::now()->addMinutes(1);
        $all = Cache::remember('api::products', $minutes, function() use ($company_id) {
            return Product::where('company_id', $company_id)->get();
        });*/
        return Product::all();
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
