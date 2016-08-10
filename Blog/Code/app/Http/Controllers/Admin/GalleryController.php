<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use File;
use App\Http\Controllers\Controller;
use App\Models\Picture;

class GalleryController extends Controller {

    public function getGallery() {

        $pictures = Picture::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.gallery.index')->with('pictures', $pictures);
    }

    public function getAddNew() {

        return view('admin.gallery.new');
    }

    public function postAddNew(Request $request) {

        $this->validate($request, [
            'picture' => 'required|image|mimes:png,jpg,jpeg|between:0,2048',
        ]);

        $picture = $request->file('picture');
        if (is_uploaded_file($picture)) {
            $file = pathinfo($picture->getClientOriginalName());
            $destinationPath = './images/gallery';
            $filename = $file['filename'] . '_' . str_random(8) . '.' . $picture->getClientOriginalExtension();
            $picture->move($destinationPath, $filename);
        }

        Picture::create([
            "name" => $filename,
        ]);

        return redirect()->route('admin.gallery.new')->with('info', 'Successfully added picture.');
    }
    
    public function getDelete($id) {
        $picture = Picture::where('id', $id)->first();

        if (!$picture) {
            return redirect()->back();
        }

        File::delete('./images/gallery/' . $picture->name);
        $picture->delete();
        
        return redirect()->back()->with('info', 'Successfully deleted picture.');  
    }

}
