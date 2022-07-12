@extends('layouts.app')

@section('content')
    
    <form class="form-group" method="POST" action="{{route('posts.store')}}">
        @csrf <!-- cest un jeton ki ns protege contre des injections -->
        <div class="m-5 col-5 ">
        <h4 class="fw-bold">Creer un nouvelle poste</h4>
        <label for="exampleFormControlInput1" class="form-label fs-4 fst-italic">Donner un titre</label>
        <input type="text" name='title' class="form-control" required placeholder="titre">
        </div>
        <div class="m-5 col-5">
        <label for="exampleFormControlTextarea1" class="form-label fs-4 fst-italic">Ecrire le contenu</label>
        <textarea class="form-control" name='content' placeholder="example textarea..." required rows="7"></textarea>
        </div>
        <div class="col-2 m-5">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection