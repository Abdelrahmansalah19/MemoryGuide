<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public  function index() {
        return view('website.booking');
    }
    public function store(Request $request)
    {
        $request->validate([
           'name'=> 'required|string',
           'email'=>'required|email',
           'phone'=>'required|text|max:20',
           'date'=>'required|text',
           'message'=>'required|max:1000'

        ]
    );

        Book::create (
             [
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'date'=>$request->date,
             'message'=>$request->message,
        ]);

        return redirect('/');
    }
}
