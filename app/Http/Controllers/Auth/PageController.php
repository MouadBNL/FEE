<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        if(auth()->user()->type == "student") {
            return view('student.dashboard');
        }
        return redirect()->route('welcome');
    }

    public function myprofile()
    {
        if(auth()->user()->type == "student") {
            return view('student.my-profile');
        }
        return redirect()->route('welcome');
    }
}
