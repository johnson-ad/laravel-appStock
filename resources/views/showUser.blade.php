@extends('layouts.app')

@section('content')

    <table class="table  table-hover table-sm m-5">
        <thead>
        <tr class="table-active ">
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
    @foreach ($users as $user)   
        <tr>
            <td>{{ $user->nom}}</td>
            <td>{{ $user->prenom}}</td>
            <td>{{ $user->email}}</td>
        </tr>         
     @endforeach
        </tbody>
    </table>
@endsection