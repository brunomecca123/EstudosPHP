@extends('templates.template')

@section('content')
<h1 class="text-center">qualquercoisa</h1>

<div class="col-12 m-auto">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Nome do Livro</th>
        <th>Paginas</th>
        <th>Preço</th>
        <th>Id user</th>
      </tr>
    </thead>
    <tbody>
      @foreach($book as $books)
      @php
      $user=$books->find($books->id)->relUsers;
      @endphp
      <tr>
        <td>{{$books->id}}</td>
        <td>{{$books->name}}</td>
        <td>{{$books->pages}}</td>
        <td>{{$books->preco}}</td>
        <td>{{$books->id_user}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection