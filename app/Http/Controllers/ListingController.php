<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listCompanies()
    {
        $companies = User::company()->with('companyProfile')->paginate(5);
        return view('list-companies', [
            'companies' => $companies
        ]);
    }

    public function showCompany($id)
    {
        $company = User::company()->with('companyProfile')->where('id', $id)->firstOrFail();

        return view('company.my-profile', [
            'user' => $company,
            'edit' => false
        ]);
    }
}
