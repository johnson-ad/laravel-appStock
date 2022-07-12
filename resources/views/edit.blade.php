@extends('layouts.app')

@section('content')
    <div>
        <form class="form-group" method="POST" action="{{route('posts.edit')}}">
            @csrf <!-- cest un jeton ki ns protege contre des injections -->
            <div class="m-5 col-5 ">
            <h4 class="fw-bold">Modifier une poste</h4>
            <label for="exampleFormControlInput1" class="form-label fs-4 fst-italic">Donner un titre</label>
            <input type="text" name='title' class="form-control"   placeholder="titre">
            </div>
            <div class="m-5 col-5">
            <label for="exampleFormControlTextarea1" class="form-label fs-4 fst-italic">Ecrire le contenu</label>
            <textarea class="form-control" name='content' placeholder="example textarea..."   rows="7"></textarea>
            </div>
            <div class="col-8 m-5 ">
                <button type="submit" class="btn btn-danger">Modifier</button>
            </div>
        </form>
    </div>
@endsection
