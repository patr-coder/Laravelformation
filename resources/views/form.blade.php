@extends('layout.app')

@section('content')
<h1>Creer un Post</h1>
<form method="POST" action="{{ route('posts.store') }}">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" name="title"class="form-control" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">content</label>
        <textarea name="content"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        
      </div>
      <button type="submit" class="btn btn-primary">creer</button>
      {{---<div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">Button</button>
        <button class="btn btn-primary" type="button">Button</button>
      </div>    ---}}      
      
      

        
            

@endsection