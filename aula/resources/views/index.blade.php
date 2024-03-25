@extends('templates.template')

@section('content')
<h1 class="text-center">qualquercoisa</h1>

<div class="col-8 m-auto"><table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome do Livro</th>
      <th scope="col">Paginas</th>
      <th scope="col">Preço</th>
      <th scope="col">Id user</th>
    </tr>
  </thead>
  <tbody>
@foreach($book as $books)
@php
    $user=$books->find($books->id)->relUsers;
@endphp
    <tr>
      <th scope="row"> {{$books->id}}</th>
      <td>{{$books->name}}</td>
      <td>{{$books->pages}}<td>
      <td>{{$books->preco}}</td>
      <td>{{$books->id}}</td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection