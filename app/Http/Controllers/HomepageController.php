<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;

class HomepageController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('homepage',compact('categories'));
    }
}
