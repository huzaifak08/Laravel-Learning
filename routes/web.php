<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function () {
//     echo "Hello World";
// });

// Route::get('/demo', function (){
//     return view('demo');
// });

// Route::get('/demo/{name}',function($name){
//     echo $name;
// });

// Route::get('/demo/{name}/{id?}',function($name,$id = null){
//     echo $name."   ";
//     echo $id;
// });

// Route::get('/demo/{name}/{id?}',function($name,$id = null){
//     $data = compact('name','id');
//     // print_r($data);
//     return view('demo')->with($data);
// });

// Route::any('/test',function(){
//     echo "My name is Huzaifa";
// });



// Route::get('/{name?}', function ($name = null){
//     $demo = "<h2>Huzaifa Khan Learn</h2>";
//     $data = compact('name','demo');
//     return view('home')->with($data);
// });

Route::get('/',[DemoController::class,'index']);
