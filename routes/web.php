<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;

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


//Don't try directly called view through route please mentation view blade in frontend controller for frontend page


//Frontend Controller 

Route::get('/',[App\Http\Controllers\FrontendController::class,'index']);


// Route::get('/about',[App\Http\Controllers\FrontendController::class,'about']);

Route::get('/refresh_captcha', [App\Http\Controllers\FrontendController::class, 'refreshCaptcha']);
Route::post('/contactStore',[App\Http\Controllers\FrontendController::class,'contactStore'])->name('contactStore');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// User Panel Profile Manage Routes
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit',[App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/update/{id}',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/specialization',[App\Http\Controllers\ProfileController::class, 'specialization'])->name('specialization');
Route::post('/specialization/store',[App\Http\Controllers\ProfileController::class, 'specialization_store'])->name('specialization.store');

Route::get('/qualification',[App\Http\Controllers\ProfileController::class, 'qualification'])->name('qualification');
Route::post('/qualification/store',[App\Http\Controllers\ProfileController::class, 'qualification_store'])->name('qualification.store');


//Master Table data fetch Route
Route::get('/get_cities/{id}', [App\Http\Controllers\FrontendController::class, 'get_cities'])->name('get_cities');
Route::get('/get_qual/{id}', [App\Http\Controllers\FrontendController::class, 'get_qual'])->name('get_qual');
Route::get('/get_role_catgs/{id}', [App\Http\Controllers\FrontendController::class, 'get_role_catgs'])->name('get_role_catgs');



//Admin & User Panel Post Manage
Route::resource('/post',App\Http\Controllers\PostController::class);
Route::get('/post/delete/{id}',[App\Http\Controllers\PostController::class,'delete'])->name('post.delete');
Route::post('/post/filter',[App\Http\Controllers\PostController::class,'postFilter'])->name('post_filter');

Route::get('/domain',[App\Http\Controllers\DomainController::class,'index'])->name('domain.index');
Route::get('/domain/assgine/',[App\Http\Controllers\DomainController::class,'assigne'])->name('domain.assgine');


Route::get('/directory/{state_name}/{state_code}',[App\Http\Controllers\FrontendController::class,'directory_show'])->name('directory_show');
Route::get('/directory/{state_name}/{city_name}/{city_code}',[App\Http\Controllers\FrontendController::class,'directory_show'])->name('directory_show');

//Admin Panel Category Manage

Route::resource('/category',App\Http\Controllers\CategoryController::class);
Route::post('/categoriesPosition',[App\Http\Controllers\CategoryController::class,'categoriesPosition']);


Route::get('/{catg_name}/{sef_url}',[App\Http\Controllers\FrontendController::class,'post_show']);
Route::get('/{page_name}',[App\Http\Controllers\FrontendController::class,'page_show']);




