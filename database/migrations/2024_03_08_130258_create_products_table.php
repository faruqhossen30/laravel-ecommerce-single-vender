<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('short_description',1000);
            $table->float('price');
            $table->integer('quantity');
            $table->integer('alert_quantity');
            $table->enum('discount_type',['flat','parcentence'])->nullable();
            $table->float('discount')->nullable();
            $table->string('sku_code')->nullable();
            $table->enum('status',['active','draft'])->default('draft');
            $table->string('thumbnail');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->json('slider')->nullable();
            $table->unsignedBigInteger('author_id');
            //seo section
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
