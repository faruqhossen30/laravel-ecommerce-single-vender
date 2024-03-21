<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;

class GalleryAjaxController extends Controller
{
    public function getGallery(){
        $galleries = Gallery::paginate(5);
        return response()->json($galleries);
    }
}
