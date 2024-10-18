<?php

use Illuminate\Support\Facades\Route;
use Modules\Posts\Http\Controllers\PostsController;
use Modules\Posts\Http\Controllers\PostController;

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

// Route::group([], function () {
//     Route::resource('posts', PostsController::class)->names('posts');
// });



Route::resource('posts', PostController::class);
/*
GET /posts → List all posts (index view)
GET /posts/create → Show create form (create view)
POST /posts → Store the new post
GET /posts/{id} → Show single post (show view)
GET /posts/{id}/edit → Show edit form (edit view)
PUT /posts/{id} → Update the post
DELETE /posts/{id} → Delete the post
*/