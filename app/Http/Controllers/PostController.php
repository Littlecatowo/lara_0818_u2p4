<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('post');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }
}
