<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application_table;

class ApplicationShowController extends Controller
{
    public function showApplication() {
        $data=Application_table::all();
        return view ('applicant.layouts.application_view', compact('data'));
    }
    public function showApplicationForm() {
        $data=ApplicationForm::all();
        return view ('admission.admission-forms.all-admissions', compact('data'));
    }

}
