<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogNavController extends Controller
{
    public function home() {
        return view('blognav.home');
    }

    public function about() {
        return view('blognav.about');
    }

    public function help() {
        return view('blognav.help');
    }

    public function login() {
        return view('blognav.login');
    }

    public function signup() {
        return view('blognav.signup');
    }
}
