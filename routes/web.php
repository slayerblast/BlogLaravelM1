<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/post/{id}', function (Request $request, $id) {
    //recupérer les informations id obligatoire
    dd($request);   
});

Route::get('/posts/{id?}', function ($id) {
    //id? optional
    dd($id);
});

Route::get('/test', [PostController::class, 'test']);