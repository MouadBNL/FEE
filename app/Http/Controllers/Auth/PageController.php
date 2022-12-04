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
                    'user' => User::where('id', auth()->user()->id)->with('profile')->firstOrFail()
                ]);
                break;
            case 'company':
                return view('company.dashboard', [
                    'user' => User::where('id', auth()->user()->id)->with('profile')->firstOrFail()
                ]);
                break;

            default:
                return redirect()->route('welcome');
                break;
        }
    }

    public function myprofile()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();
        // if(auth()->user()->type == "student") {
        return view('student.my-profile', [
            'user' => $user
        ]);
        // }
        // return redirect()->route('welcome');
    }
}
