<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('obscura.page.landing', ['title' => 'OBSCURA']);
})->name('homeall');

Route::get('/about-us', function () {
    return view('obscura.page.about', ['title' => 'OBSCURA - ABOUT US']);
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/weekly-meeting', [App\Http\Controllers\WeeklyMeeting::class, 'index'])->name('weeklymeeting');

// Obscura Exibition route



Route::group(['prefix' => 'obscura-exhibition'], function () {
	Route::get('/', [GalleryController::class, 'index'])->name('homeExhibition');
    
    Route::get('/about-us',function(){
        return view('ObscuraExibition.page.about',['title' => 'ABOUT OBSCURA EXHIBITION']);
    })->name('aboutExhibition');
    
    Route::get('/komite',function(){
        return view('ObscuraExibition.page.komite',['title' => 'OUR COMMITTEE']);
    })->name('komiteExhibition');
    
    Route::get('/gallery', [GalleryController::class, 'gallery'])->name('galleryExhibition');
        Route::group(['middleware' => 'admin'],function(){
            Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin');
            Route::get('/add-competitor' , [AdminController::class, 'view'])->name('page-add-competitor');
            Route::post('/add-competitor/add' , [AdminController::class, 'store']);
            Route::get('/edit-competitor/{id}', [AdminController::class, 'detail'])->name('edit-competitor');
            Route::post('/edit-competitor/edit', [AdminController::class, 'edit']);
            Route::get('/delete-competitor/{id}', [AdminController::class, 'destroy']);
        });
});

Route::group(['middleware' => ['auth','verified']],function(){
    Route::post('/addLike', [GalleryController::class, 'addLike']);
    Route::post('/deleteLike', [GalleryController::class, 'deleteLike']);
    Route::post('/addVote', [GalleryController::class, 'addVote']);
});

Route::post('/knowLike', [GalleryController::class, 'knowLike']);
Route::post('/knowVote', [GalleryController::class, 'knowVote']);
Route::post('/getLike', [GalleryController::class, 'getLike']);
Route::get('/obscura-exhibition/gallery/like', [GalleryController::class, 'filter']);
Route::post('/getViews', [GalleryController::class, 'getViews']);
