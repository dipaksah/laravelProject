<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/user_login',function (){
    return view('user_login');
});

Route::get('/user_register',function (){
    return view('user_register');
});

//for Admin user
Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/admin_dashboard', function (){
        return view('AdminDashboard_Layout.admin_dashboard');
    });


});

//Route::get('/user_dashboard',function (){
//    return view('UserDashboard.user_dashboard');
//});
//Route::get('/booked',function (){
//    return view('AdminDashboard_Layout.booked');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/user_login','App\Http\Controllers\UserController@register');

//Logout session
Route::get('logout','App\Http\Controllers\LogoutController@logout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
