<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function getBlog() {

        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('admin.blog.index')->with('posts', $posts);
    }

    public function getAddNew() {

        return view('admin.blog.new');
    }

    public function getEdit($id) {

        $post = Post::where('id', $id)->first();

        if (!$post) {
            return redirect()->back();
        }

        return view('admin.blog.edit')->with('post', $post);
    }

    public function postEdit(Request $request, $id) {
        $post = Post::where('id', $id)->first();

        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $post->update([
            'title' => $request->input('title'),
            'description' => clean($request->input('description')),
        ]);

        return redirect()->back()
                        ->with('post', $post)
                        ->with('info', 'Successfully edited post.');
    }

    public function postAddNew(Request $request) {

        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'picture' => 'required|image|mimes:png,jpg,jpeg|between:0,2048',
        ]);

        $picture = $request->file('picture');
        
        if (is_uploaded_file($picture)) {
            $file = pathinfo($picture->getClientOriginalName());
            $destinationPath = './images/blog';
            $filename = $file['filename'] . '_' . str_random(8) . '.' . $picture->getClientOriginalExtension();
            $picture->move($destinationPath, $filename);
        }

        Post::create([
            "title" => $request->input('title'),
            "description" => clean($request->input('description')),
            "picture" => $filename,
        ]);

        return redirect()->route('admin.blog.new')->with('info', 'Successfully added post.');
    }

    public function getDelete($id) {
        $post = Post::where('id', $id)->first();

        if (!$post) {
            return redirect()->back();
        }

        File::delete('./images/blog/' . $post->picture);
        $post->delete();
        
        return redirect()->back()->with('info', 'Successfully deleted post.');  
    }

}
