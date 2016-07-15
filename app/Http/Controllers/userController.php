<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
    public function registrar() {
        return view('registrar');
    }
}
