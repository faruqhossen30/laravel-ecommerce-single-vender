<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Attribute;
use Illuminate\Http\Request;

class AttributeValueSelectAjaxController extends Controller
{
    public function attributeValue(Request $request){
       $attribute_id = $request->attribute_id;

       $attribute = Attribute::with('values')->firstWhere('id',$request->attribute_id);
    //    return $attribute;
    return view('admin.ajax.attributeselect', compact('attribute'))->render();
    }
}
