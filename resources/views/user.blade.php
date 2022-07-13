@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-around flex-wrap mt-3 col-8">
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title fw-bold">Liste des utilisateurs</h5>              
            <a href="{{route('show.user')}}" class="btn btn-success">Voir la liste</a>
        </div>
        <img src="https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top">
      </div>
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title fw-bold">Creer ou modifier un Utilisateur</h5>              
          <a href="{{route('create.user')}}" class="btn btn-danger">Creer/Modifier</a>
        </div>
        <img src="https://images.unsplash.com/photo-1610737245930-e4f41bab0b6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img-top">
      </div>
     
</div>
@endsection