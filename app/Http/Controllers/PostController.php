<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request; //utiliser pour recuperer les donnees de la requete http

class PostController extends Controller
{
    public function index()
    {
        //on peut cree une variable et la mettre une variable dans une vue
        // $title = 'Mon super titre';
        // $title2 = 'Mon super titre 2';


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

        // $posts = [
        //     "Mon super premier titre",
        //     "Mon super deuxième titre"
        // ];

        $posts = Post::all();

        //passer un tableau dans la vue grace a compact
        // return view('articles', compact('posts'));

        //passer un tableau dans la vue grace a un tableau
        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        //on recupere de notre model Post.php
        //$posts =  Post::all(); // ::all() permet de recuperer tout les posts de la base de donnees
        // dd($posts); // dd permet de debuger le code

        // find permet de recuperer un post a partir de son id
        //$posts =  Post::find($id);

        //fonctione comme find mais la seul difference est que si on ne trouve pas de post on va voir une erreur 404
        $posts =  Post::findOrFail($id);

        return view('article', [
            'post' => $posts

        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request) // voir ligne 6
    {
        //on peu directement recuperer les donnees de la requete ex: $request->title // permet de recupere le titre de la requete
        // dd($request->title);

        // creation d une new post methode 1
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save(); // permet de sauvegarder le post dans la base de donnees
        // dd('Post créé');

        // creation d une new post methode 2
        //concernant la methode 2 il faut aller dans le model Post et creer une variable protected $fillable et lui passe les data kon va recuperer dans le controller pour pouvoir creer
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        dd('Post créé');
    }

    public function edit(Request $request)
    {
        $post =  Post::findOrFail(3);
        $post->update([
            'title' => $request->title,
            'content' =>  $request->content
        ]);
        return view('edit', [
            'edit' => $post
        ]);
    }
}
