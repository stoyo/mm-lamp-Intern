<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Picture;

class HomeController extends Controller{
    
    public function getIndex(){
        
        $galleryCounter = Picture::count();
        $postsCounter = Post::count();
        
        $picturesCounter = $postsCounter + $galleryCounter;
        
        return view('admin.index.index')->with('postsCounter', $postsCounter)->with('picturesCounter', $picturesCounter);
    
    }
}