<?php

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

use App\Category;
use App\Review;

Auth::routes();

Route::prefix('/')->group(function() {
    Route::get('/', 'HomeController@index');
    
    Route::middleware('auth')->prefix('profile')->group(function(){
        Route::get('/', 'ProfileController@index')->name('profile');
        Route::post('/save', 'ProfileController@save')->name('profile.save');
        Route::post('delete/{id}', 'ProfileController@delete')->name('profile.delete');
        Route::post('save_photo', 'ProfileController@save_photo')->name('profile.save_photo');
    });

    Route::prefix('feedback')->group(function() {
        Route::get('/', 'FeedbackController@index')->name('feedback');
        Route::post('/save', 'FeedbackController@save')->name('feedback.save');
    });

    Route::prefix('category')->group(function() {
        Route::get('/', 'CategoryController@index')->name('category');
        Route::get('/{pid}/{ch_id}', function($pid, $ch_id) {
            $recent_reivews = Review::orderBy('regarding', 'desc')->limit(10)->get();
            return view('pages.category')->with('recent_reviews', $recent_reivews);
        });
    });

    Route::prefix('about')->group(function() {
        Route::get('/', function() {
            return view('pages.about');
        });
    });

    Route::prefix('contact_us')->group(function() {
        Route::get('/', function() {
            return view('pages.contactus');
        });
    });
});

