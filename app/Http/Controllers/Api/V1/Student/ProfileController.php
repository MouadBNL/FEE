<?php

namespace App\Http\Controllers\Api\V1\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{

    public function getLinks()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return $user->profile->links;
    }

    public function updateLinks()
    {
        $data = request()->validate([
            'links' => 'array|present',
            'links.*' => 'string|required|url'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'links' => json_encode($data['links'])
        ]);

        return ['message' => 'ok'];
    }

    public function getHobbies()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return $user->profile->hobbies;
    }

    public function updateHobbies()
    {
        $data = request()->validate([
            'hobbies' => 'array|present',
            'hobbies.*' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'hobbies' => json_encode($data['hobbies'])
        ]);

        return ['message' => 'ok'];
    }

    public function getSkills()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return $user->profile->skills;
    }

    public function updateSkills()
    {
        $data = request()->validate([
            'skills' => 'array|present',
            'skills.*' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'skills' => json_encode($data['skills'])
        ]);

        return ['message' => 'ok'];
    }

    public function getLanguages()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return $user->profile->languages;
    }

    public function updateLanguages()
    {
        $data = request()->validate([
            'languages' => 'array|present',
            'languages.*.key' => 'string|required',
            'languages.*.value' => 'string|required'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'languages' => json_encode($data['languages'])
        ]);

        return ['message' => 'ok'];
    }

    public function getSummary()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return $user->profile->summary;
    }

    public function updateSummary()
    {
        $data = request()->validate([
            'summary' => 'present|string'
        ]);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'summary' => $data['summary']
        ]);

        return ['message' => 'ok'];
    }

    public function getExperiences()
    {
        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.experiences'])->firstOrFail();

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

        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.experiences'])->firstOrFail();

        $user->profile->experiences()->delete();
        foreach ($data['experiences'] as $exp) {
            $user->profile->experiences()->create($exp);
        }
    }

    public function getEducation()
    {
        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.education'])->firstOrFail();

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

        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.education'])->firstOrFail();

        $user->profile->education()->delete();
        foreach ($data['education'] as $exp) {
            $user->profile->education()->create($exp);
        }
    }

    public function getProjects()
    {
        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.projects'])->firstOrFail();

        return $user->profile->projects;
    }

    public function updateProjects()
    {
        $data = request()->validate([
            'projects' => 'array|present',
            'projects.*.title' => 'string|required',
            'projects.*.link' => 'string',
            'projects.*.git' => 'string',
            'projects.*.description' => 'string',
            'projects.*.skills' => 'array',
            'projects.*.skills.*' => 'string|required',
        ]);

        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.projects'])->firstOrFail();

        $user->profile->projects()->delete();
        foreach ($data['projects'] as $exp) {
            $user->profile->projects()->create($exp);
        }
    }

    public function getCertifications()
    {
        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.certifications'])->firstOrFail();

        return $user->profile->certifications;
    }

    public function updateCertifications()
    {
        $data = request()->validate([
            'certifications' => 'array|present',
            'certifications.*.title' => 'string|required',
            'certifications.*.school' => 'string|required',
            'certifications.*.reception' => 'string|required',
        ]);

        $user = User::where('id', auth()->user()->id)->with(['studentProfile', 'studentProfile.certifications'])->firstOrFail();

        $user->profile->certifications()->delete();
        foreach ($data['certifications'] as $exp) {
            $user->profile->certifications()->create($exp);
        }
    }

    public function updateCV()
    {
        request()->validate([
            'cv' => 'required|mimes:pdf|max:8192', // 8MB
        ]);

        $pic = request()->file('cv');

        $picName = Str::slug(auth()->user()->name) . '-' . Carbon::now()->format('Y-m-d-H') . uniqid() . '.' . $pic->getClientOriginalExtension();

        $path = $pic->storeAs('public/cv', $picName);

        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'cv' => '/storage/cv/' . $picName,
        ]);
    }

    public function deleteCV()
    {
        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'cv' => null
        ]);
    }


}
