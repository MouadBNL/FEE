<?php

namespace App\Http\Controllers\Api\V1\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function getLinks()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();

        return $user->profile->links;
    }

    public function updateLinks()
    {
        $data = request()->validate([
            'links' => 'array|present',
            'links.*' => 'string|required|url'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->profile()->update([
            'links' => json_encode($data['links'])
        ]);

        return ['message' => 'ok'];
    }

    public function getHobbies()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();

        return $user->profile->hobbies;
    }

    public function updateHobbies()
    {
        $data = request()->validate([
            'hobbies' => 'array|present',
            'hobbies.*' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->profile()->update([
            'hobbies' => json_encode($data['hobbies'])
        ]);

        return ['message' => 'ok'];
    }

    public function getSkills()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();

        return $user->profile->skills;
    }

    public function updateSkills()
    {
        $data = request()->validate([
            'skills' => 'array|present',
            'skills.*' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->profile()->update([
            'skills' => json_encode($data['skills'])
        ]);

        return ['message' => 'ok'];
    }

    public function getLanguages()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();

        return $user->profile->languages;
    }

    public function updateLanguages()
    {
        $data = request()->validate([
            'languages' => 'array|present',
            'languages.*.key' => 'string|required',
            'languages.*.value' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->profile()->update([
            'languages' => json_encode($data['languages'])
        ]);

        return ['message' => 'ok'];
    }

    
}
