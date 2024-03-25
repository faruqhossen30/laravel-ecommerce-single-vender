<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category_id',
        'subcategory_id',
        'brand_id',
        'author_id',
        'discount',
        'discount_type',
        'price',
        'quantity',
        'puk_code',
        'thumbnail',
        'slider',
        'status',
        'is_stock'
    ];
}
