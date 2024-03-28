<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\Product;
use Illuminate\Http\Request;

class SearchpageController extends Controller
{
    public function searchpage() {


        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }


        // $posts = News::with('user')->when($keyword, function ($query, $keyword) {
        //     return $query->where('title', 'like', '%' . $keyword . '%');
        // })->get();
        $products = Product::when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->get();
        // return  $products;
        return view('productsearchpage',compact('products'));
    }
}
