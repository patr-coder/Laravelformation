@extends('layout.app')

@section('content')

   <h2 class="h3 mb-3 text-center">Liste des articles</h2>
   
   <div class="col-md-8 offset-md-2 mt-4">

      <table class="table">
           <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">content</th>
         
                  </tr>
              </thead>
          <tbody>
              @foreach ($posts as $post)
                <tr>
                   <th scope="row">{{ $post->id }}</th> 
                   <td>"{{  $post->title }} </td>
                   <td>{{ $post->content }}</td>   
                </tr>    
              @endforeach
         </tbody>
      </table>
  </div>  

  <hr>
   
   
   <h3>les liens des articles</h3>
     @if ($posts->count()> 0)
        @foreach ($posts as $post )
           <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{$post->title}}</a></h3>  
        @endforeach
   @else
        <span>Aucun message dans la base de donnees </span>     
   @endif  
   {{--<h3>Liste des videos</h3>
   @forelse($video->$comments as $comment )
        <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('Y') }}</div>
    @empty
        <span>Aucun Commentaire pour ce video </span>    
    @endforelse --}}


@endsection