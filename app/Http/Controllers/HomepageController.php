<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('homepage',compact('categories'));
    }
}
