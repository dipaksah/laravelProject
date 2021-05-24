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

// Route::get('/user_login',function (){
//     return view('user_login');
// })->name('userLogin');

Route::get('/user_login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('userLogin');
Route::post('/user_login',[App\Http\Controllers\Auth\LoginController::class,'authenticate']);
// Route::post('/user_login', 'App\Http\Controllers\Auth\LoginController@authenticate');

Route::get('/user_register',function (){
    return view('user_register');
})->name('userRegister');
Route::post('/user_register',[App\Http\Controllers\Auth\RegisterController::class,'create']);   

// for Admin
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin_dashboard', function (){
        return view('AdminDashboard_Layout.admin_dashboard');
    });

    Route::get('/customers', function () {
        return view('AdminDashboard_Layout.customers');
    });
    
    //all customer fetch from database 
    Route::get('/customers',[App\Http\Controllers\customerController::class,'showall'])->name('customers');

    Route::get('/booked', function () {
        return view('/AdminDashboard_Layout.booked');     
    });
    Route::get('/booked',[App\Http\Controllers\serviceController::class,'showall'])->name('allservices');

    //delete customer by admin
    Route::get('deletecustomer/{id}',[App\Http\Controllers\customerController::class,'destroy'])->name('deletecust');

    //delete service by admin
    Route::get('deleteservice/{id}',[App\Http\Controllers\serviceController::class,'destroy']);

    //adding cleaner by admin
    Route::post('/admin_dashboard',[App\Http\Controllers\cleanerController::class,'store'])->name('cleaneradd');

    //show all cleaner
    Route::get('/admin_dashboard',[App\Http\Controllers\cleanerController::class,'showall'])->name('allcleaner');

    //delete cleaner by admin
    Route::get('deletecleaner/{id}',[App\Http\Controllers\cleanerController::class,'destroy']);
    
    //edit by admin customer
    Route::get('editcustomer/{id}',[App\Http\Controllers\customerController::class,'edit'])->name('editone');

    //update customer by admin
    Route::get('customerupdate/{id}',[App\Http\Controllers\customerController::class,'update'])->name('updatecust');

    //update cleaner by admin
    Route::get('cleanerupdate/{id}',[App\Http\Controllers\cleanerController::class,'update'])->name('updatecleaner');

    //update orders by admin
    Route::get('orderupdate/{id}',[App\Http\Controllers\serviceController::class,'update'])->name('updateorder');


});

//for Normal user
Route::group(['middleware'=>['auth','user']],function(){
    Route::get('/user_dashboard', function (){
        return view('UserDashboard.user_dashboard');
    })->name('userdashbaord');
    
    Route::get('/services',[App\Http\Controllers\serviceController::class,'index'])->name('service');
    Route::post('/services',[App\Http\Controllers\serviceController::class,'store']);
});

 

// Route::post('/services',[App\Http\Controllers\serviceController::class,'index'])->name('index');



//Route::get('/user_dashboard',function (){
//    return view('UserDashboard.user_dashboard');
//});
//Route::get('/booked',function (){
//    return view('AdminDashboard_Layout.booked');
//});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/user_login','App\Http\Controllers\UserController@register');

//Logout session
Route::get('logout','App\Http\Controllers\LogoutController@logout');

// Route::get('logout','App\Http\Controllers\LogoutController@logout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
