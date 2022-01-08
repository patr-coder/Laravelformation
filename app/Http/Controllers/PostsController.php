<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{ 
    public function index()

    { 
        $posts = Post::all();
       // $post = post::find(9);
        //$post->delete();
       return view('articles',[
           'posts'=>$posts
       ]);
    }
    public function create()

    {
        return view('form');
    }

    public function store(Request $request)
    {
       $post = new Post();

       //$request->validate([
           //'title' =>'required|unique:posts',
           //'content' => 'required'
       //]);
       $post->title = $request->title;
       $post->content = $request->content;
       $post->save();
       dd('post creer!!!');

       //return view('articles',['post'=>$post]);
    }

    public  function show($id)
    {
        
        $post = Post::find($id);

        return view('article',[
            'post'=>$post
        ]);
        ///$post = Post::where('title', '=','')->firstOrFail();
        //$post = Post::findOrFail($id);
        
        
        //$post = Post::where('title', '=','')->firstOrFail();
        //$post = Post::findOrFail($id);
        //$posts = [
            //1 => 'Mon premier n 1',
            //2=> 'Mon  second n 2'
        //];
       // $post = $posts[$id] ?? 'pas de titre';

        
        

    }
    
    public function contact()
    {
        return view('contact');
    }
     

       //public function creator()
    //{
       // $comments = Comment::all();

       //return view('article',[
           //'comments'=> $comments]);
    //}
}
