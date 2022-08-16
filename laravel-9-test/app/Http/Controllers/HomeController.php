<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getAbout() {
        return view('about');
    }

    public function getContact() {

        // Auth::check();

        return view('contact');
    }
}
