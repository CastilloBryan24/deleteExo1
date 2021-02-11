@extends('welcome')

@section('content')
<table class="table table-bordered table-dark mt-5 container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Genre</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($membre as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->gender}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <h3 class="text-center mt-5">Ajouter un membre</h3>
  <form action="/member-store" method="POST" class="container mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Age</label>
      <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Genre</label>
      <input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection