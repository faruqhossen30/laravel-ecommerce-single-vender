<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Category;
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
        return view('admin.product.create',compact('categories','subcategories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                 'title'          => 'required',
                 'description'    => 'required',
                 'category_id'    => 'required',
                 'subcategory_id' => 'required',
                 'discount'       => 'required',
                 'price'          => 'required',
                 'quantity'       => 'required',
                 'puk_code'       => 'required',
                 'thumbnail'      => 'required',
                //  'is_stock'       => 'required',

            ]
        );

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/products/' . $thumbnailname);
        }
        $data = [
            'title'          => $request->title,
            'slug'           => Str::slug($request->title),
            'description'    => $request->description,
            'category_id'    => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id'       => $request->brand_id,
            'slider'         => $request->slider,
            'author_id'      => Auth::user()->id,
            'discount'       => $request->discount,
            'price'          => $request->price,
            'quantity'       => $request->quantity,
            'puk_code'       => $request->puk_code,
            'is_stock'       => $request->is_stock,
            'status'         => $request->status,
            'discount_type'  => $request->discount_type,
            'thumbnail'      => $thumbnailname,

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
