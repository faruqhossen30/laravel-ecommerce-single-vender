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
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('thumbnail');
            $table->json('slider')->nullable();
            $table->unsignedBigInteger('author_id');
            // price
            $table->float('price');
            $table->integer('quantity');
            $table->string('puk_code')->nullable();
            $table->float('discount')->nullable();
            $table->enum('discount_type',['flat','parcentence'])->nullable();
            $table->enum('status',['active','draft'])->default('draft');
            $table->boolean('is_stock')->default(true)->nullable();
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
