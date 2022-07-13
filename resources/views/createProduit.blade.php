@extends('layouts.app')

@section('content')
<form class="form-group p-5" method="POST" action="{{route('produit.store')}}">
  @csrf 
  <div class="m-3 col-6">
      <label for="exampleFormControlInput1" class="form-label">Libelle produit</label>
      <input type="text" name="libelle"class="form-control" required placeholder="Entrer le libelle">
    </div>
  <div class="m-3 col-6">
      <label for="exampleFormControlInput1" class="form-label">Stock </label>
      <input type="number" name="stock" class="form-control" required placeholder="Entrer le stock">
    </div>
    <div class=" m-3 col-6">
      <button type="submit" class="btn btn-success">Creer</button>
    </div>
</form>
     
@endsection