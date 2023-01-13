<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserInfoController extends Controller
{
    public function getUserInfo()
    {
        $user = User::wherte('id', auth()->user()->id)->firstOrFail();
        return [
            "name" => $user['name'],
            "email" => $user['email'],
            "picture" => $user['picture']
        ];
    }

    public function updateAuthInfo()
    {
        $data = request()->validate([
            'name' => 'required|string|min:4|max:32',
            'email' => 'required|string|email|unique:users,email,' . auth()->user()->id
        ]);

        User::where('id', auth()->user()->id)->update([
            'name' => $data['name'],
            'email' => $data['email']
        ]);
    }

    public function updatePicture() {
        Log::info("Request" . json_encode(request()));
        request()->validate([
            'picture' => 'required|image|max:8192', // 8MB
        ]);

        $pic = request()->file('picture');

        $picName = Carbon::now()->format('Y-m-d-H') . uniqid() . '.' . $pic->getClientOriginalExtension();

        $path = $pic->storeAs('public/pictures', $picName);

        User::where('id', auth()->user()->id)->update([
            'picture' => '/storage/pictures/' . $picName
        ]);
    }

    public function updatePassword() {
        $data = request()->validate([
            'password' => 'string|required|min:4|max:30|confirmed'
        ]);

        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($data['password'])
        ]);
    }

}
