<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use Illuminate\Http\Request;

class CategorypageController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categorypage', compact('categories'));
    }
}
