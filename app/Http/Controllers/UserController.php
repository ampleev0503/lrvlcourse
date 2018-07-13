<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($num = null)
    {
        return view('user', ['num' => $num]);
    }

    public function getForm()
    {
        return view('form', ['method' => 'get']);
    }

    public function postForm()
    {
        return view('form', ['method' => 'post']);
    }
}
