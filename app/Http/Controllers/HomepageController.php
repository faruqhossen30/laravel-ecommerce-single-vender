<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();

        // return $categories;
        return view('homepage',compact('categories'));
    }
}
