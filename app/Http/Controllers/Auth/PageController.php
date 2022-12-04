<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        switch (auth()->user()->type) {
            case 'student':
                return view('student.dashboard', [
                    'user' => User::student()->where('id', auth()->user()->id)->firstOrFail()
                ]);
                break;
            case 'company':
                return view('company.dashboard', [
                    'user' => User::company()->where('id', auth()->user()->id)->firstOrFail()
                ]);
                break;

            default:
                return redirect()->route('welcome');
                break;
        }
    }

    public function myprofile()
    {
        $user = User::where('id', auth()->user()->id)->firstOrFail();
        // if(auth()->user()->type == "student") {
        return view('student.my-profile', [
            'user' => $user
        ]);
        // }
        // return redirect()->route('welcome');
    }
}
