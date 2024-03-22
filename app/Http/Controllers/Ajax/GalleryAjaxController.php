<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;

use function Termwind\render;

class GalleryAjaxController extends Controller
{
    public function getGallery()
    {
        $thumbnails  = Gallery::paginate(8);
        return view('admin.ajax.gallerymodalbody', compact('thumbnails'))->render();
    }


    public function getPaginateGallery()
    {
        $thumbnails  = Gallery::paginate(8);
        return view('admin.ajax.gallerymodalbody', compact('thumbnails'))->render();
    }
}
