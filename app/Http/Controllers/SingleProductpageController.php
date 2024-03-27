<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Product;
use Illuminate\Http\Request;

class SingleProductpageController extends Controller
{
    public function singleproduct( Request $request ,$id ){

        $product=Product::where('id',$id)->first();
        return view('singleproduct',compact('product'));
    }
}
