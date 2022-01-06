@extends('layout.app')

@section('content')

   <h1>les articles</h1>
   @foreach ($posts as $post )
   <h2> {{ $post }}</h2>
   @endforeach

@endsection