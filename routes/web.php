<?php

use App\Http\Controllers\PostsController;
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

/*Route::get('/', function () {
    return view('welcome');

});

Route::get('posts', function ()
{
    # code...
    return response()->json([
        'title'=> 'mon super title',
        'description ' => 'ma super description'
    ]);
}); */


Route::get('articles', [PostsController::class,'index'])->name('welcome');
Route::get('posts/create', [PostsController::class,'create'])->name('posts.create');
Route::post('posts/create', [PostsController::class,'store'])->name('posts.store');
//Route::get('article/creator', [PostsController::class,'creator'])->name('creator');
Route::get('posts/{id}', [PostsController::class,'show'])->name('posts.show');
Route::get('contact', [PostsController::class,'contact'])->name('contact');
route::get('register',[PostsController::class,'register']);
//Route::get('article', [PostsController::class,'article'])->name('content.create');

