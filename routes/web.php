<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\itprojectController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\Admin\brandController;
use App\Http\Controllers\Admin\categoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[itprojectController::class,'index']);
Route::get('/port',[itprojectController::class,'port']);
Route::get('/about',[itprojectController::class,'about']);
Route::get('/contact',[itprojectController::class,'contact']);
Route::get('/team',[itprojectController::class,'Team']);
Route::get('/service',[itprojectController::class,'service']);
Route::get('/droup',[itprojectController::class,'droup']);
//
//contact crud controller   

Route::get('/itcrud',[contactcontroller::class,'index'])->name('itcrud');
Route::get('/crud/create',[contactcontroller::class,'create'])->name('create');
Route::post('/crud/insertData',[contactcontroller::class,'insert'])->name('insertData');
Route::get('/crud/updateData/{id}',[contactcontroller::class,'updateData'])->name('update');
Route::POST('/crud/postData',[contactcontroller::class,'postData'])->name('postData');
Route::get('/crud/deleteData/{id}',[contactcontroller::class,'delete'])->name('delete');
///==================================contact crud end===========================================
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.logo');
Route::group(['prefix'=> 'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
    
    Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
    
     });
    Route::group(['middleware'=> 'admin.Auth'],function(){
    });
    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');
    });
    //category crud controller   
    Route::get('/categorycrud',[categoryController::class,'index'])->name('categorycrud');
    Route::get('categorycreate',[categoryController::class,'categorycreate'])->name('categorycreate');
    Route::post('insertData',[categoryController::class,'insert'])->name('insertData');
    Route::get('updateData/{id}',[categoryController::class,'updateData'])->name('update');
    Route::POST('postData',[categoryController::class,'postData'])->name('postData');
    Route::get('/deleteData/{id}',[categoryController::class,'delete'])->name('delete');
///=============================================================================
//order crud controller   
Route::get('/order',[orderController::class,'order'])->name('order');
///=============================================================================
//brand crud controller   
Route::get('/brandcrud',[brandController::class,'index'])->name('brandcrud');
Route::get('brandcreate',[brandController::class,'brandcreate'])->name('brandcreate');
Route::post('insertData',[brandController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[brandController::class,'updateData'])->name('update');
Route::POST('postData',[brandController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[brandController::class,'delete'])->name('delete');
///=============================================================================