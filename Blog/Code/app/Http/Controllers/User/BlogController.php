<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller{
    
    public function getBlog(){
        
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        
        return view('user.blog.index')->with('posts', $posts);
    
    }
    
    public function getBlogPost($id){
        
        $post = Post::where('id', $id)->first();
        
        return view('user.blog.custom')->with('post', $post);
        
    }
}