<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Mon super titre'; //on peut cree une variable et la mettre une variable dans une vue
        //return view('articles', compact('title')); // on utilise la fonction compact pour passer des variables a la vue
        return view('articles')->with('title', $title);
        /* 
        on utilise la fonction with pour passer des variables a la vue
        elle prend en parametre une cle et un valeur : la cle est le nom de la variable( le nom kon va utiliser dans le html)
        et la valeur va contenir juste notre juste notre variable : ici c'est $title    
        */
    }
}
