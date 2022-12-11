<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'email'     => 'string|email|required|max:255|unique:users',
            'name'      => 'string|required|max:30|unique:users|min:8',
            'password'  => 'string|confirmed|required|max:255|min:8',
        ]);

        User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'type'      => 'student'
        ]);

        return redirect()->route('student.login');
    }
}
