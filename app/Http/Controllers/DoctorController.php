<?php

namespace App\Http\Controllers;

use App\Models\Docter;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('website.doctor');
    }
    public function store(Request $request)
    {
        $request->validate([

           'message'=>'required|max:1000'

        ]);

        Docter::create
        ([

             'message'=>$request->message,
        ]);
        return redirect('/');
    }
}
