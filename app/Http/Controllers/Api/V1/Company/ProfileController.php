<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAbout()
    {
        $user = User::company()->where('id', auth()->user()->id)->with('companyProfile')->firstOrFail();

        return [
            'industry' => $user->profile->industry,
            'company_size' => $user->profile->company_size,
            'founding_year' => $user->profile->founding_year,
            'address' => $user->profile->address,
            'specialties' => $user->profile->specialties,
        ];
    }

    public function updateAbout()
    {
        $data = request()->validate([
            'industry' => 'string|nullable|min:1|max:255',
            'company_size' => 'string|nullable|min:1|max:255',
            'founding_year' => 'numeric|nullable|min:1500|max:2025',
            'address' => 'string|nullable',
            'specialties' => 'array|present',
            'specialties.*' => 'string|required|min:1|max:255'
        ]);

        User::company()->where('id', auth()->user()->id)->firstOrFail()->companyProfile()->update($data);
    }
}
