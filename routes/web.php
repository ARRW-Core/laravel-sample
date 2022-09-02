<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

/*
Get - Request a resource
Post - Create a resource
Put - Update a resource
Patch - Modify a resource
Delete - Delete a resource
Options - Asks the server which verbs are supported
*/

//Route::get('/', function () {
//    Debugbar::info('Hello from a route');
//    return view('welcome');
//});
//GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/1', [PostsController::class, 'show']);

//POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

//PUT
Route::get('/blog/1/edit', [PostsController::class, 'edit']);
Route::patch('/blog/1', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/1', [PostsController::class, 'destroy']);

//Route::resource('blog', PostsController::class);

//Route for the invoke method in HomeController
Route::get('/', HomeController::class);

//Multiple Http verbs
//Route::match(['get', 'post'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Return view
//Route::view('/blog', 'blog.index', ['name' => 'Taylor']);
