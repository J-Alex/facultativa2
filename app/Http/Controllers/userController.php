<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class userController extends Controller
{
    public function registrar() {
        //return view('registrar');
        if (Auth::check()) {
            return view('registrar');
        } else { return redirect('/'); }
    }
}
