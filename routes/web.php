<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditController;
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

Route::get('/edit', [EditController::class, 'edit'])->name('edit');
Route::post('/posts/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store'); // pour envoyer des donnees a la base de donnees depui un formulaire
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
// on peut mettre un regex pour le parametre id avec whereNumber permet de restreindre l'id a un nombre si passe une chaine de caractere on va voir une erreur
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/produit', [ProduitController::class, 'produit'])->name('produit');
Route::get('/produit/create', [ProduitController::class, 'create'])->name('produit.create');
Route::post('/produit/create', [ProduitController::class, 'store'])->name('produit.store');

Route::get('/categorie', [CategorieController::class, 'categorie'])->name('categorie');
Route::get('/categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/categorie/create', [CategorieController::class, 'store'])->name('categorie.store');

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
