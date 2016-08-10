<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller{
    
    public function getAbout(){
        
        $about = About::first();
        
        return view('admin.about.index')->with('about', $about);
    
    }
    
    public function postAbout(Request $request){
        
        $this->validate($request, [
            'text' => 'required|min:20',
        ]);

        About::first()->update([
            'text' => clean($request->input('text')),
        ]);
        
        return redirect()->back()->with('info', 'Successfully edited about page text.');
        
    }
}