<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\Product;
use Illuminate\Http\Request;

class CategoryProductpageController extends Controller
{
    public function index($slug){
        $category = Category::firstWhere('slug', $slug);

        $products = Product::where('category_id', $category->id)->get();
        return view('categoryproductpage', compact('category','products'));
    }
}
