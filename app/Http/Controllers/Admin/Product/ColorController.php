<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::latest()->paginate(10);
        return view('admin.product.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  return $request->all();
        $request->validate(
            ['name' => 'required', 'code' => 'required']
        );
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'author_id' => Auth::user()->id,
            'status' => $request->status,
        ];

        Color::create($data);

        return redirect()->route('color.index');
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
        $color = Color::where('id', $id)->first();
        // return $colors;
        return view('admin.product.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        Color::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'status' => $request->status,
        ]);
        return redirect()->route('color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::where('id', $id)->delete();
        return redirect()->route('color.index');
    }
}
