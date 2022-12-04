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
        switch (auth()->user()->type) {
            case 'student':
                return view('student.my-profile', [
                    'user' => User::student()->where('id', auth()->user()->id)->firstOrFail()
                ]);
                break;
            case 'company':
                return view('company.my-profile', [
                    'user' => User::company()->where('id', auth()->user()->id)->firstOrFail()
                ]);
                break;

            default:
                return redirect()->route('welcome');
                break;
        }
    }
}
