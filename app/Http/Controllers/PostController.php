<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //on peut cree une variable et la mettre une variable dans une vue
        $title = 'Mon super titre';
        $title2 = 'Mon super titre 2';


        // on utilise la fonction compact pour passer des variables a la vue
        //return view('articles', compact('title'));


        /* 
        on utilise la fonction with pour passer des variables a la vue
        elle prend en parametre une cle et un valeur : la cle est le nom de la variable( le nom kon va utiliser dans le html)
        et la valeur va contenir juste notre juste notre variable : ici c'est $title    
        */
        // return view('articles')->with('title', $title);

        // on veux passer plusieurs variables a la vue
        // return view('articles', compact('title', 'title2'));

        /*
        on peut aussi passer plusieur variable dans la vue avec les tableaux        
        */
        // return view('articles', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);

        $posts = [
            "Mon super premier titre",
            "Mon super deuxième titre"
        ];

        //passer un tableau dans la vue grace a compact
        // return view('articles', compact('posts'));

        //passer un tableau dans la vue grace a un tableau
        return view('articles', [
            'posts' => $posts
        ]);
    }
}
