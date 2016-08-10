<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Picture;

class GalleryController extends Controller{
    
    public function getGallery(){
        
        $pictures = Picture::orderBy('id', 'desc')->paginate(10);
        
        return view('user.gallery.index')->with('pictures', $pictures);
    
    }
}