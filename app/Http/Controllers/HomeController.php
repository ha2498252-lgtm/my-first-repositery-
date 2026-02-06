<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Home Page'];
        return view('home', $data);
    }
}
