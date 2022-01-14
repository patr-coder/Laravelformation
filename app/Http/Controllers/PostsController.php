<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{ 
    public function index()

    { 
        $posts = Post::all();
        $video = Video::find(1);
       // $post = post::find(9);
        //$post->delete();
       return view('articles',[
           'posts'=>$posts,
           'video' => $video
       ]);
    }
    public function create()

    {
        return view('form');
    }

    
    public function store(Request $request)
   {
    Storage::disk('public')->put('avatars', $request->avatar);

    die();

    { if($request->isMethod('post'))
     { 
        $post = new Post();

        $request->validate([
            'title'=> 'required|min:5|title|unique:post', new Uppercase,
            'content'=> 'required',
            'file.*' => 'required|mines:csv,text,xlx,xls,pdf|max:2048'
        ]);
       $post->title = $request->title;
       $post->content = $request->content;
       $post->save();
       

       return view('articles',['post'=>$post]);
     }
    }
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

    public function register()
    
    {
        $post = Post::find(7);
        $video = Video::find(1);
        # code...
       
        $comment1 = new Comment(['content'=> "mon premier"]);
        $comment2 = new Comment(['content'=> "mon second"]);

        $post->comments()->saveMany([$comment1,$comment2]);

        $comment3 = new Comment(['content'=> "mon troisieme"]);
        $video->comments()->save($comment3);

        
    }
     

       //public function creator()
    //{
       // $comments = Comment::all();

       //return view('article',[
           //'comments'=> $comments]);
    //}
}
