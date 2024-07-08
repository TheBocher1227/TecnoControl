<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function Login() {
        return view('login');
    }
}
