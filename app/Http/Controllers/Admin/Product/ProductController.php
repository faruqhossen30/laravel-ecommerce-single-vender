<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use App\Models\Admin\Product\Attribute;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\Color;
use App\Models\Admin\Product\Product;
use App\Models\Admin\Product\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $products = Product::latest()->paginate('10');
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a nesw resource.
     */
    public function create()
    {
        $categories    = Category::get();
        $subcategories = SubCategory::get();
        $thumbnails    = Gallery::paginate(8);
        $attributes    = Attribute::with('values')->get();
        $colors        = Color::all();
        $brands        = Brand::all();
        return view('admin.product.create',compact('categories','subcategories','thumbnails','attributes','colors','brands'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();


        $request->validate(
            [
                 'title'          => 'required',
                 'description'    => 'required',
                 'category_id'    => 'required',
                 'discount'       => 'required',
                 'price'          => 'required',
                 'quantity'       => 'required',
                 'thumbnail'      => 'required',
                //  'puk_code'       => 'required',
                //  'is_stock'       => 'required',

            ]
        );


        $data = [
            'category_id'       => $request->category_id,
            'subcategory_id'    => $request->subcategory_id,
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'price'             => $request->price,
            'quantity'          => $request->quantity,
            'alert_quantity'    => $request->alert_quantity,
            'discount_type'     => $request->discount_type,
            'discount'          => $request->discount,
            'sku_code'          => $request->sku_code,
            'status'            => $request->status,
            'thumbnail'         => $request->thumbnail,
            'brand_id'          => $request->brand_id,
            'slider'            => json_encode($request->slider),
            'author_id'         => Auth::user()->id,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keyword'      => $request->meta_keyword,

        ];

        Product::create($data);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
