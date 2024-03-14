<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\Admin\Gallery\GalleryCategoryController;
use App\Http\Controllers\Admin\Gallery\GalleryController;
use App\Http\Controllers\Admin\Product\AttributeController;
use App\Http\Controllers\Admin\Product\AttributeValueController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\ColorController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\SubCategoryController;
use App\Http\Controllers\Admin\UserController;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role',RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('blog', BlogController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('role', RoleController::class);
    // Start Work

    Route::resource('color', ColorController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('gallery', GalleryController::class);

    Route::get('attribute-value/{id}', [AttributeValueController::class, 'create'])->name('attributevalue.create');
    Route::post('attribute-value/{id}', [AttributevalueController::class, 'store'])->name('attributevalue.store');

    Route::post('attribute-value/{id}/update', [AttributevalueController::class, 'update'])->name('attributevalue.update');
    Route::post('attribute-value/{id}/destroy', [AttributevalueController::class, 'destroy'])->name('attributevalue.destroy');


    Route::resource('user', UserController::class);

    Route::resource('gallery', GalleryController::class);
    Route::resource('gallery-category', GalleryCategoryController::class);
});
