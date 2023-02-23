<?php

namespace App\Http\Controllers\Admission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdmissionApplcationListController extends Controller
{
    public function showApplicantData()
    {
        return view('admission.applicantList');
    }
}
