<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('admission.dashboard');
    }
    public function showAll ()
    {
        return view('admission.admission-forms.all-admissions');
    }
    public function showCollege ()
    {
        return view('admission.admission-forms.college');
    }
    public function showGraduate ()
    {
        return view('admission.admission-forms.graduate');
    }
    public function showTransferee ()
    {
        return view('admission.admission-forms.transferee');
    }
    public function showApplicantData()
    {
        return view('admission.layouts.applicantList');
    }

}
