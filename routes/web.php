<?php

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

// Route::get('/', function () {
//     return view('articles');
// }); // This is the default route
// Route::get('/', 'App\Http\Controllers\PostController@index'); // This is the default route
Route::get('/', [PostController::class, 'index']);

// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             'title' => 'My first post',
//             'body' => 'This is my first post'
//         ]
//     ]);
// });

// Route::get('articles', function () {
//     return view('articles');
// });
