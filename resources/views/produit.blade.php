@extends('layouts.app')

@section('content')
  <div class="container-fluid d-flex justify-content-between mt-3">
    <div class="col-2 container  mt-3 d-flex flex-column justify-content-start">
      <a href="{{route('produit.store')}}"><button class="btn btn-primary m-3">Ajouter produit</button></a>
      <a href="#"><button class="btn btn-primary m-3">Produit par categorie</button></a>
    </div>
    <div class="container-fluid d-flex justify-content-around flex-wrap mt-3 ">
      @foreach ($produit as $prod)     
        <div class="card mt-2" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title fw-bold">Libelle : {{ $prod->libelle  }}</h5>
              <p class="fs-4 fst-italic"><span>Stock : {{ $prod->stock }}</span></p>
              <a href="#" class="btn btn-primary">Update</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </div>
          </div>
          @endforeach
    </div>
  </div>
@endsection