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

    public function getSummary()
    {
        $user = User::where('id', auth()->user()->id)->with('profile')->firstOrFail();

        return $user->profile->summary;
    }

    public function updateSummary()
    {
        $data = request()->validate([
            'summary' => 'present|string'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->profile()->update([
            'summary' => $data['summary']
        ]);

        return ['message' => 'ok'];
    }

    public function getExperiences()
    {
        $user = User::where('id', auth()->user()->id)->with(['profile', 'profile.experiences'])->firstOrFail();

        return $user->profile->experiences;
    }

    public function updateExperiences()
    {
        $data = request()->validate([
            'experiences' => 'array|present',
            'experiences.*.title' => 'string|required',
            'experiences.*.company' => 'string|required',
            'experiences.*.start' => 'string|required',
            'experiences.*.end' => 'string|required',
            'experiences.*.description' => 'string|required',
        ]);

        $user = User::where('id', auth()->user()->id)->with(['profile', 'profile.experiences'])->firstOrFail();

        $user->profile->experiences()->delete();
        foreach ($data['experiences'] as $exp) {
            $user->profile->experiences()->create($exp);
        }
    }

    public function getEducation()
    {
        $user = User::where('id', auth()->user()->id)->with(['profile', 'profile.education'])->firstOrFail();

        return $user->profile->education;
    }

    public function updateEducation()
    {
        $data = request()->validate([
            'education' => 'array|present',
            'education.*.title' => 'string|required',
            'education.*.school' => 'string|required',
            'education.*.start' => 'string|required',
            'education.*.end' => 'string|required',
            'education.*.description' => 'string|required',
        ]);

        $user = User::where('id', auth()->user()->id)->with(['profile', 'profile.education'])->firstOrFail();

        $user->profile->education()->delete();
        foreach ($data['education'] as $exp) {
            $user->profile->education()->create($exp);
        }
    }
}
