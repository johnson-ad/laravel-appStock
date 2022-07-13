<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function user()
    {
        return view('user');
    }

    public function create()
    {
        return view('createUser');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->email_verified_at = now();
        $user->save();
        return redirect('/user');
    }
    public function show()
    {
        $users = User::all();
        return view('showUser', [
            'users' => $users
        ]);
    }
}
