<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function getUserInfo()
    {
        return [
            "name" => auth()->user()->name
        ];
    }

    public function update()
    {
        $data = request()->validate([
            'name' => 'required|string|min:4|max:32'
        ]);

        auth()->user()->update([
            'name' => $data['name']
        ]);
    }
}
