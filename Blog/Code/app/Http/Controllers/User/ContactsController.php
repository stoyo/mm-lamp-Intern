<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Mailgun;
use Illuminate\Http\Request;

class ContactsController extends Controller {

    public function getContacts() {

        return view('user.contacts.index');
    }

    public function postContacts(Request $request) {
        
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'message' => 'required|min:10',
        ]);
        
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $msg = $request->input('message');
        
        Mailgun::send('mails.contacts', ['name' => $name, 'email' => $email, 'phone' => $phone, 'msg' => $msg], function ($m) use ($email, $name) {
            $m->from($email, $name);
            $m->to('genchev_stoyan@abv.bg', "Stoyan Genchev")->subject($name.'just sent you an email.');
        });
        
        return redirect()->back()-with('info', 'Successfully sent email. Thank you!');
    }

}
