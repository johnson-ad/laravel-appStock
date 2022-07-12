@extends('layouts.app')

@section('content')

<div class="m-5 col-5">
        <h4>Title : <span class="fs-4 fst-italic">{{  $post->title }}</span></h4>        
        <label for="exampleFormControlTextarea1" class="form-label fs-4 fst-italic">Content</label>
        <textarea class="form-control" name='content' placeholder="example textarea..." required rows="7">{{  $post->content }}</textarea>
    </div>
    <div class="col-2 m-5">
        <a href="{{route('edit')}}"><button class="btn btn-danger">Modifier</button></a>
    </div>


@endsection
