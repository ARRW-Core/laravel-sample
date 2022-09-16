<?php


use App\Http\Controllers\FallbackController;
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
/*
 * ->where(), allows you to specify a regex pattern that the parameter must match
 * ->where('id', '[0-9]+'), allows you to specify a regex pattern that the parameter must match
 * ->whereNumber('id'), allows you to specify a regex pattern that the parameter must match
 * ->whereAlpha('id'), allows you to specify a regex pattern that the parameter must match
 * ->whereAlphaNumeric('id'), allows you to specify a regex pattern that the parameter must match
 * ->whereUuid('id'), allows you to specify a regex pattern that the parameter must match
 * ->whereSlug('id'), allows you to specify a regex pattern that the parameter must match
 */

////GET
//Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
//Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');
//
////POST
//Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
//Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');
//
////PUT
//Route::get('/blog/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit');
//Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');
//
////DELETE
//Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

//Route prefix and group for /blog
Route::prefix('blog')->group(function () {
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});
//Route::resource('blog', PostsController::class);

//Route for the invoke method in HomeController
Route::get('/', HomeController::class);

//Fallback route with FallbackController::class
Route::fallback(FallbackController::class)->name('fallback.index');

//Multiple Http verbs
//Route::match(['get', 'post'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Return view
//Route::view('/blog', 'blog.index', ['name' => 'Taylor']);
