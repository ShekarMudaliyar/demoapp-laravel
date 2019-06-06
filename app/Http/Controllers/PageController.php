<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
function mainPage(){
    return view('pages.homepage');
}
function aboutPage(){
    return view('pages.about')->with('title','About Us');
}
function contactPage(){
    return view('pages.contact')->with('title','Contact Us');
}
function createPost(){
    return view('pages.createpost')->with('title','Create Post');
}
}
