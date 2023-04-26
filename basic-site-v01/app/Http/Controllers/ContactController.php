<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * shows contact page
     */
    public function index (){
        return view('contact');
    }

    /**
     * send the filled in contact form as a email to website owner
     * 
     * @return 
     */
    public function submit(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
