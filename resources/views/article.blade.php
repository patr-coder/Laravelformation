@extends('layout.app')

@section('content')
    <h2>{{ $post->content }}</h2>

    <hr>
    @forelse($post->$comments  as $comment )
        <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('Y') }}</div>
    @empty
        <span>Aucun Commentaire</span>    
    @endforelse
@endsection    
    
  
 
    

    
