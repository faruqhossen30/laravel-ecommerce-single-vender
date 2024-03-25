<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','thumbnail','author_id','status'];

    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
