<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('website.contact');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=> 'required|string|min:3|max:20',
           'email'=>'required|email',
           'subject'=>'required|string|max:100',
           'message'=>'required|max:1000'

        ]);

        Contact::create
        ([
             'name'=>$request->name,
             'email'=>$request->email,
             'subject'=>$request->subject,
             'message'=>$request->message,
        ]);
        return redirect('/');
    }

}
