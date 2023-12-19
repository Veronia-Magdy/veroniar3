<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;


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




//Route::get('login', function () {
 //  return view('login');
//});

//Route::post('logged', function () {
 //  return 'you are logged in';
//})->name('logged');

//Route::get('controll',[ExampleController::class,'sh']);
//Route::post('control',[ExampleController::class,'show']
//)->name('logged');



//Route::get('about', function () {
  //   return ('about');
 //});

 //Route::get('contact us', function () {
 //   return ('contact us');
//});

//Route::get('/blog/{category}', function ($cat) {
   //  return ('the Blog is:' . $cat);
 //})->whereIn('category',['science','sports','math','medical']);

//Route::get('food', function () {
   // return view('food');
//});

//Route::fallback(function() {
   // return redirect('/');
//});

//Route::prefix('lar')->group(function(){ 
   // Route::get('/', function (){
   // return view ('test');
//});

//Route::get('test', function () {
   // return ('welcome to my first laravel website');
//});

//Route::get('/test1/{id}', function ($id) {
   // return ('the id is:' . $id);
//});

//Route::get('/test2/{id?}', function ($id=0) {
   // return ('the id2 is:' . $id);
//})->where(['id'=> '[0-9]+']);

//Route::get('/test3/{id?}', function ($id=0) {
    //return ('the id is:' . $id);
//})->whereNumber('id');

//Route::get('/test4/{name?}', function ($name=null) {
    //return ('the name is:' . $name);
//})->whereAlpha('name');

//Route::get('/test5/{id?}/{name}', function ($id=0,$name) {
  //  return ('the id is:' . $id . "" .'the name is:' . $name);
//})->where(['id'=> '[0-9]+' , 'name'=>'[a-zA-Z]+']);

//Route::get('/product/{category}', function ($cat) {
   // return ('the name is:' . $cat);
//})->whereIn('category',['pc','Lab']);
//});

//routes for post table
Route::get('createPost',[PostController::class,'create'])->name('createPost');
Route::post('storePost',[PostController::class,'store'])->name('storePost');
Route::get("showPost/{id}", [PostController::class,"show"])->name('showPost');
Route::get('updatePost/{id}',[PostController::class,'edit']);
Route::get('deletePost/{id}',[PostController::class,'destroy']);
Route::get("trashedPost", [PostController::class,"trashed"])->name('trashedPost');
Route::get("restorePost/{id}", [PostController::class,"restore"])->name('restorePost');
Route::get('forceDeletePost', [PostController::class,'forceDelete'])->name('forceDeletePost');
Route::get('posts',[PostController::class,'index'])->name('posts');
Route::put('updatee/{id}',[PostController::class,'update'])->name('Update');
Route::get("showPost/{id}",[CarController::class,'show'])->name('showPost');
//routes for car table
Route::get('createCar',[CarController::class,'create'])->name('createCar');
Route::get('cars',[CarController::class,'index'])->name('cars');
Route::get('updateCar/{id}',[CarController::class,'edit']);
Route::get('deleteCar/{id}',[CarController::class,'destroy']);
Route::get('trashed', [CarController::class,'trashed'])->name('trashed');
Route::get('forceDelete', [CarController::class,'forceDelete'])->name('forceDelete');
Route::get('restoreCar/{id}', [CarController::class,'restore'])->name('restoreCar');
Route::put('update/{id}',[CarController::class,'update'])->name('update');
Route::post('storeCar',[CarController::class,'store'])->name('storeCar');
Route::get("showCar/{id}",[CarController::class,'show'])->name('showCar');