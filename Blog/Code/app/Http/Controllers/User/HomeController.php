<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller{
    
    public function getIndex(){
        
        $posts = Post::take(3)->get();
        
        return view('user.index.index')->with('posts', $posts);
    
    }
}