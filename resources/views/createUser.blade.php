@extends('layouts.app')

@section('content')
<form class="form-group p-5" method="POST" action="{{route('user.store')}}">
    @csrf 
    <div class="m-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Nom </label>
        <input type="text" name="nom" class="form-control" required placeholder="Entrer le nom">
      </div>
    <div class="m-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Prenomm </label>
        <input type="text" name="prenom" class="form-control" required placeholder="Entrer le prenom">
      </div>
    <div class="m-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" name="email" class="form-control" required placeholder="Exemple : email@email.com">
      </div>
    {{-- <div class="m-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Role </label>
        <input type="text" name="role" class="form-control" required placeholder="Role">
      </div> --}}
    <div class="m-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Mot de passe </label>
        <input type="password" name="password" class="form-control" required placeholder="...............................">
      </div>
      
      <div class=" m-3 col-6">
        <button type="submit" class="btn btn-success">Creer</button>
        <button  class="btn btn-danger">Modifier</button>
      </div>
</form>
@endsection