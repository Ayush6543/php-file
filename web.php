<?php

use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\studentController;

use App\Http\Controllers\PersonalInfoController;

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


Route::get('/home', function () {
    return view('home');
});


/*route::redirect('/home','contact');*/

Route::get('/about/{name}', function($name){
    return view('about',['name'=>$name]);
});

Route::get('/contact',function(){
    return view('contact');
});

Route::view('/admin','admin.login');


Route::get('user',[UserController::class,'getUser']);

Route::get('about',[UserController::class,'aboutUser']);

Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('admin-login',[UserController::class,'adminLogin']);

Route::get('/user-home',[UserController::class,'userHome']);




Route::get('/users',[studentController::class,'getStudents']); 


Route::get('/employee',[EmployeeController::class,'getemployee']);

Route::resource('personal',PersonalInfoController::class);