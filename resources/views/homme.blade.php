@extends('welcome')

@section('content')
<table class="table table-bordered table-dark mt-5 container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Genre</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($membre as $item)
        @if ($item->gender == "homme") 
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->gender}}</td>
            <td>
                <form action="/delete-member/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
  </table>

@endsection