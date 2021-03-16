@extends('layouts.app')
@section('title','Home')
@section('content')
<h1>Shop</h1>
@foreach ($dresses as $dress)
  <h3>{{ $dress->brand}}</h3>
  <ul>
    <li>{{ $dress->id}}</li>
    <li>{{ $dress->taglia}}</li>
    <li>{{ $dress->colore}}</li>
  </ul>
@endforeach
@endsection
