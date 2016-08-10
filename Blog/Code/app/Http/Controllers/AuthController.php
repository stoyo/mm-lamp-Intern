<?php namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller{
    
    public function getSignin(){
        return view('auth.signin');
    }
    
    public function postSignin(Request $request){
        $this->validate($request,[
           'username'=> 'required',
           'password'=>'required',
        ]);
        
        if(!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))){
            return redirect()->back()->with('info', 'Wrong username or password.');
        }
        
        return redirect()->route('admin.index.index');
    }
    
    public function getSignup(){
        return view('auth.signup');
    }
    
    public function postSignup(Request $request){
        $this->validate($request,[
           'username'=> 'required|unique:users|min:3|max:255',
           'password'=>'required|min:6|max:255',
        ]);
        
        User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);
        
        return redirect()
                ->route('auth.signin')
                ->with('info', "You have successfully signed up. Why don't you sign in?");
    }
    
    public function getSignout(){
        Auth::logout();
        
        return redirect()
                ->route('user.index.index');
    }
}