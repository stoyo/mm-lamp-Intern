<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller; 
use App\Models\About;
use App\Models\Picture;

class AboutController extends Controller{
    
    public function getAbout(){
        
        $about = About::first();
        $picture = Picture::orderByRaw("RAND()")->first();
        
        return view('user.about.index')->with('about', $about)->with('picture', $picture);
    
    }
}