@extends('layout.app')

@section('content')

   <h1>les articles</h1>
   @if ($posts->count()> 0)
        @foreach ($posts as $post )
           <h2><a href="{{ route('posts.show', ['id' => $spot->id]) }}">$post->title}}</a></h2>
        @endforeach
   @else
        <span>Aucun message dans la base de donnees </span>     
   @endif

@endsection