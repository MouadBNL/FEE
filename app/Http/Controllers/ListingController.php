<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function listCompanies()
    {
        $user = null;
        switch (auth()->user()->type) {
            case 'student':
                $user = User::student()->where('id', auth()->user()->id)->firstOrFail();
                break;
            case 'company':
                $user = User::company()->where('id', auth()->user()->id)->firstOrFail();
                break;
        }
        $companies = User::company()->with('companyProfile')->paginate(5);
        return view('list-companies', [
            'companies' => $companies,
            'user' => $user
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

    public function listStudents()
    {
        $user = null;
        switch (auth()->user()->type) {
            case 'student':
                $user = User::student()->where('id', auth()->user()->id)->firstOrFail();
                break;
            case 'company':
                $user = User::company()->where('id', auth()->user()->id)->firstOrFail();
                break;
        }
        $students = User::student()->with('studentProfile')->paginate(2);

        return view('list-students',[
            'students' => $students,
            'user' => $user
        ]);
    }

    public function showStudent($id)
    {
        $company = User::student()->with('studentProfile')->where('id', $id)->firstOrFail();

        return view('student.my-profile', [
            'user' => $company,
            'edit' => false
        ]);
    }
}
