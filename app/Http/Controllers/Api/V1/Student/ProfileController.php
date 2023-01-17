<?php

namespace App\Http\Controllers\Api\V1\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Mews\Purifier\Facades\Purifier;

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
        Log::info("Non purified: \n" . $data['summary']);
        $data['summary'] = Purifier::clean($data['summary']);
        Log::info("Purified: \n" . $data['summary']);

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
            'experiences.*.start' => 'string|required|date_format:Y-m-d',
            'experiences.*.end' => 'string|required|date_format:Y-m-d',
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
            'education.*.start' => 'string|required|date_format:Y-m-d',
            'education.*.end' => 'string|required|date_format:Y-m-d',
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
            'certifications.*.reception' => 'string|required|date_format:Y-m-d',
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

    public function getContact()
    {
        $user = User::where('id', auth()->user()->id)->with('studentProfile')->firstOrFail();

        return [
            'email' => $user->profile->contact_email,
            'phone' => $user->profile->contact_phone,
        ];
    }

    public function updateContact()
    {
        $data = request()->validate([
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
        ]);
        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'contact_email' => $data['email'],
            'contact_phone' => $data['phone'],
        ]);
    }

    public function updateField()
    {
        $data = request()->validate([
            'type' => ['string','required', Rule::in(['Années Préparatoires', 'Génie Electrique', 'Génie Informatique', 'Génie Réseaux et Systèmes de Télécommunications', 'Génie Industriel', 'Génie Mécatronique'])],
            'year' => ['string','required', Rule::in(['1ère année', '2ème année', '3ème année', '4ème année', '5ème année'])]
        ]);
        User::where('id', auth()->user()->id)->firstOrFail()->studentProfile()->update([
            'field' => $data['year'] . ' ' . $data['type'],
        ]);
    }

}
