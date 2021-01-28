@extends('layout')

@section('contenu')
    
<h2>Listing des achats de jeux</h2>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User_ID</th>
        <th scope="col">Jeux_ID</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($achats as $achat)
      <tr>
        <th scope="row">{{$achat->id}}</th>
        <td>{{$achat->user_id}}</td>
        <td>{{$achat->jeux_id}}</td>
      </tr>
        @endforeach

    </tbody>
  </table>



@endsection