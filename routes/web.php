<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\WebsiteController;

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
    return view('welcome');
});
// Route::get('about-us',function(){
//    $name= 'Rahul';
//    $email = 'Singha';
//    return view('about',['myname'=>$name,'myemail'=>$email]);
// });
Route::get('contact',function(){
  return view('contact');
});
Route::get('about',[AboutController::class,'about']);
// Route::get('business/{news}',function($x){
//     return view('business',['cat'=>$x]);
//   });
Route::get('business/{news}',[BusinessController::class,'business']);

Route::get('create-person',[PersonController::class,'create']);
Route::post('store-person',[PersonController::class,'store']);
Route::get('persons',[PersonController::class,'all']);
Route::get('edit-person/{pid}',[PersonController::class,'edit']);
Route::post('update-person/{pid}',[PersonController::class,'update']);
Route::get('delete-person/{pid}',[PersonController::class,'delete']);
Route::get('home',[WebsiteController::class,'home']);
Route::get('about',[WebsiteController::class,'about']);
Route::get('contact',[WebsiteController::class,'contact']);
Route::get('dashboard',[AdminController::class,'dashboard']);
Route::get('buttons',[AdminController::class,'buttons']);
Route::get('cards',[AdminController::class,'cards']);
Route::get('colors',[AdminController::class,'colors']);
Route::get('borders',[AdminController::class,'borders']);
Route::get('animations',[AdminController::class,'animations']);
Route::get('other',[AdminController::class,'other']);
Route::get('login',[AdminController::class,'login']);
Route::get('register',[AdminController::class,'register']);
Route::get('forgotpassword',[AdminController::class,'forgotpassword']);
Route::get('notfoundpages',[AdminController::class,'notfoundpages']);
Route::get('blankpage',[AdminController::class,'blankpage']);
Route::get('chart',[AdminController::class,'chart']);
Route::get('table',[AdminController::class,'table']);