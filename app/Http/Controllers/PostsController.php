<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{ 
    public function index()

    {
        $posts = ['Mon super  premier titre',
        'Mon super  second  titre'];
        //return view('articles', compact('title'));
        //return view('articles')->with('title', $title);

        //return view('articles',compact('posts'));
        return view('articles')->with ('posts',$posts);
    }

    public  function show($id)
    {
        $posts = [
            1 => 'Mon premier n 1',
            2=> 'Mon  second n 2'
        ];
        $post = $posts[$id] ?? 'pas de titre';

        return view('article',[
            
            'post'=> $post
        ]);
        
    }
    public function contact()
    {
        return view('contact');
    }
    //
}
