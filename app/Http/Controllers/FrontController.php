<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontView.index'); 
    }

    public function cart()
    {
        return view('frontView.cart'); 
    }

    public function menu()
    {
        return view('frontView.menu'); 
    }
}
