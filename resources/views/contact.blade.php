@extends('layouts.app')

@section('content')
<form class="form-group" method="POST" action="#">
    @csrf 
    <div class="m-5 col-6">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" class="form-control" required placeholder="name@example.com">
      </div>
      <div class="m-5 col-6">
        <label for="exampleFormControlTextarea1" class="form-label">Quelle est votre domande ?</label>
        <textarea class="form-control" required rows="3"></textarea>
      </div>
      <div class=" m-5 col-6">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
</form>

@endsection

