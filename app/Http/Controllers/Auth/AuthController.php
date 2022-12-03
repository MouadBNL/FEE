<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        
        $request->session()->regenerate();

        // Checking if user have a profile
        $user = User::where('id', auth()->user()->id)->firstOrFail();
        if(! $user->checkProfile()) {
            $user->generateProfile();
        }

        return redirect()->route('dashboard');
    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}
