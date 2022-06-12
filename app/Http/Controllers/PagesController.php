<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about(){
        return view('pages.about');
    }

    public function book(){
        return view('pages.book');
    }

}