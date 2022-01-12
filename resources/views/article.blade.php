@extends('layout.app')

@section('content')
    <h2>{{ $post->content }}</h2>
    {{-- <span>$post->image?$post->image->path : "pas d'image"}}</span>---}}

    <hr>
    {{-- @forelse($post->$comments as $comment )
        <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('Y') }}</div>
    @empty
        <span>Aucun Commentaire pour ce commentaire</span>    
    @endforelse --}}

    <hr>
    
        
    @endforelse ($post->$tags as $tag )
          <span>{{ $tag->name }}</span> 
    @empty
    <span>Aucun tag pour ce post</span>  
    @endforelse
@endsection    
    
  
 
    

    
