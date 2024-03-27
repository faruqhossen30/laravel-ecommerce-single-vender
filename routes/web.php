<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Ajax\AttributeValueSelectAjaxController;
use App\Http\Controllers\Ajax\GalleryAjaxController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogComtroller;
use App\Http\Controllers\CategorypageController;
use App\Http\Controllers\CategoryProductpageController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SingleProductpageController;
use App\Http\Controllers\TearmsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/product/{id}',[SingleProductpageController::class,'singleproduct'])->name('singleproduct');
Route::get('/category/{slug}',[CategoryProductpageController::class,'index'])->name('categoryproduct');
Route::get('categories',[CategorypageController::class,'index'])->name('categorypage');


Route::get('about',[AboutController::class,'index'])->name('aboutpage');
Route::get('price', [PricepageController::class, 'index'])->name('pricepage');
// Route::get('blog', [BlogComtroller::class, 'index'])->name('blogpage');
Route::get('terms', [TearmsController::class, 'index'])->name('termspage');
Route::get('articles',[ArticlesController::class,'index'])->name('articlespage');
Route::get('faq',[FaqController::class,'index'])->name('faqpage');
Route::get('contact',[ContuctController::class,'index'])->name('contactpage');
Route::get('/single', function () {
    return view('singleproduct');
});

Route::get('/order', function () {
    return view('order');
});
Route::get('/login-registation', function () {
    return view('login-registation');
})->name('loginpage');
Route::get('/test', function () {
    return view('test');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=>'ajax'], function(){
    Route::get('galleries', [GalleryAjaxController::class, 'getGallery'])->name('ajax.galleries');
    Route::get('galleries/paginate', [GalleryAjaxController::class, 'getPaginateGallery']);
    // Multi Photo Modal
    Route::get('multi-photo/galleries', [GalleryAjaxController::class, 'getMultiPhotoGallery'])->name('ajax.multiphto.galleries');
    Route::get('multi-photo/galleries/paginate', [GalleryAjaxController::class, 'getPaginateMultiPhotoGallery']);

    Route::get('attribute/select', [AttributeValueSelectAjaxController::class, 'attributeValue'])->name('ajax.attribute');
});

require __DIR__.'/auth.php';
