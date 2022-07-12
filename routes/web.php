<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
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

// This is the default route
// Route::get('/', function () {
//     return view('articles');
// }); 

// Route grace namespaces (voir ligne 4 )
// name permet de nommer une route 
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
// on peut mettre un regex pour le parametre id avec whereNumber permet de restreindre l'id a un nombre si passe une chaine de caractere on va voir une erreur
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/produit', [ProduitController::class, 'produit'])->name('produit');
Route::get('/categorie', [CategorieController::class, 'categorie'])->name('categorie');
Route::get('/user', [UserController::class, 'user'])->name('user');

//reponse format json [ grace a la methode response() ]
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
