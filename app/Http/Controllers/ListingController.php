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

    public function listStudents()
    {
        $students = User::student()->with('studentProfile')->paginate(2);

        return view('list-students',[
            'students' => $students,
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
