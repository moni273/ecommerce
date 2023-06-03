<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function list()
    {
        $productsList = Product::get();
        $products = [];
        foreach($productsList as $key => $value)
        {
            $categoryOfProduct = ProductCategory::select('name')->where('id',$value->category_id)->first();
            $products[$key] = $value;
            $products[$key]['category_name'] = $categoryOfProduct->name;
        }
        return view('frontend.products',compact('products'));
    }
}
