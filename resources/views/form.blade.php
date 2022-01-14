@extends('layout.app')

@section('content')
<div class="container ">
  <h1 class="h3 mb-3 text-center">Creer un Post</h1>
<form method="POST" action="{{ route('posts.store') }}" enctype="/multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" @error('title') is-invalid @enderror name="title" placeholder="eg: Title : Topic" >
        @error('title')
        <div  class="invalid-feedback">
          <span>{{ $message }}</span>
        </div>  
        @enderror
       
          
      
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
        <textarea name="content"class="form-control" id="exampleFormControlTextarea1" rows="3" @error('content') is-invalid 
            
        @enderror></textarea>
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
          
      </div>
      <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Chooser your  files </label>
          <input class="form-control" type="file" name="file[]" id="formFileMultiple" accept="image/*" multiple />
      </div>    
      <button type="submit" class="btn btn-primary">creer</button>
      
</div>

        
            

@endsection