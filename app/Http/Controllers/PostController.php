<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');

    }
    public function create(){
         return view('posts.create');
    }
    public function store(Request $req){
     return redirect()->route('posts.index');
    }
    public function show($id){
      //  return "ID:" .$id;
        return view('posts.show',['postId'=> $id]);
    }
}
