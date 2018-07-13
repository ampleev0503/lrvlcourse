<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($num = null)
    {
        return view('user', ['num' => $num]);
    }

    public function form(Request $request)
    {
        if($request->isMethod('post'))
            echo "форма принята";

        if($request->isMethod('get'))
            return view('form');
    }
}
