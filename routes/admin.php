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

// Admin login section route
Route::prefix('ib-admin/')->group(function () {
    Route::get('login','BlogPostController@testlogin')->name('admin.login');
});

Route::prefix('dashboard')->group(function () {
    Route::get('', 'DashboardController@home')->name('admin.dashboard');
});

//E-Commerce component section route
Route::prefix('ecommerce')->group(function () {
    Route::get('products','EcommerceController@showAllProduct')->name('e-com.products');

    Route::get('product','EcommerceController@showProductForm')->name('e-com.product');
    Route::post('product','EcommerceController@processProduct');
});

// Travel component route section
Route::prefix('travel/')->group(function () {

    //Travel category section route
    Route::get('categories', 'PackageCategoryController@showAllCategory')->name('travel.categories');

    Route::get('category', 'PackageCategoryController@showCategory')->name('travel.category');
    Route::post('category', 'PackageCategoryController@processCategory');

    // Travel Category Edit and Update and Delete Route
    Route::get('category/edit/{id}','PackageCategoryController@categoryEdit')->name('travel.category.edit');
    Route::get('category/delete/{id}','PackageCategoryController@categoryDelete')->name('travel.category.delete');

    Route::post('category/update','PackageCategoryController@categoryUpdate')->name('travel.category.update');


    // Travel package create route section
    Route::get('packages', 'TravelPackageController@showAllPackages')->name('travel.packages');

    Route::get('package', 'TravelPackageController@showPackageForm')->name('travel.package');
    Route::post('package', 'TravelPackageController@processPackageForm');

    // Travel package schedule route section
    Route::get('schedules','TravelScheduleController@showAllSchedules')->name('travel.schedules');

    Route::get('schedule', 'TravelScheduleController@showScheduleForm')->name('travel.schedule');
    Route::post('schedule', 'TravelScheduleController@processScheduleForm');

    // Travel blog route section
    Route::get('blogs', 'BlogPostController@showAllBlog')->name('travel.blogs');

    Route::get('blog', 'BlogPostController@showBlogFrom')->name('travel.blog');
    Route::post('blog', 'BlogPostController@processBlogFrom');

    //Travel blog command review section route
    Route::get('blog-review','BlogPostController@showBlogReview')->name('travel.blog-review');
});

Route::prefix('incredible/')->group(function() {
    route::get('add','WhyIncredibleController@showForm')->name('why.incredible');
    route::post('add','WhyIncredibleController@processForm');

    route::get('add/edit/{id}','WhyIncredibleController@editFrom')->name('why.edit');
    route::get('add/delete/{id}','WhyIncredibleController@deleteFrom')->name('why.delete');

    route::post('add/update','WhyIncredibleController@updateFrom')->name('why.update');
});

//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//
//});
