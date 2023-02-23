<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicationForm;
class ApplicationFormController extends Controller
{
    function ApplicationForm() {
        return view ('application-form');
    }

    
    function dataInput (Request $request) {
        $classification = $request ->  input ('classification');
        $type = $request -> input ('eductype');
        $course = $request -> input ('course');
        $year = $request -> input('year');
        $lrn = $request -> input('lrn');
        $sname = $request -> input('sname');
        $fname = $request -> input('fname');
        $mname = $request -> input('mname');
        $sex = $request -> input('sex');
        $birthday = $request -> input('birthday');
        $nationality = $request -> input('nationality');
        $placeofbirth = $request -> input('placeofbirth');
        $religion = $request -> input('religion');
        $siblings = $request -> input('siblings');
        $civilstatus = $request -> input('civilstatus');
        $ordinalpos = $request -> input('ordinalpos');
        $presentadd1 = $request -> input('presentadd1');
        $presentadd2 = $request -> input('presentadd2');
        $presentadd3 = $request -> input('presentadd3');
        $presentadd4 = $request -> input('presentadd4');
        $presentadd5 = $request -> input('presentadd5');
        $presentadd6 = $request -> input('presentadd6');
        $permanentadd1 = $request -> input('permanentadd1');
        $permanentadd2 = $request -> input('permanentadd2');
        $permanentadd3 = $request -> input('permanentadd3');
        $permanentadd4 = $request -> input('permanentadd4');
        $permanentadd5 = $request -> input('permanentadd5');
        $permanentadd6 = $request -> input('permanentadd6');
        $homephone = $request -> input('homephone');
        $mobilephone = $request -> input('mobilephone');
        $email = $request -> input('email');

        $isInsertSuccesss = ApplicationForm::insert([
            'entry_classification' => $classification, 
            'educ_type'=> $eductype,
            'course' => $course,
            'year_level'=> $year,
            'sname'=> $sname,
            'fname'=> $fname,
            'mname'=> $mname,
            'sex'=> $sex,
            'nationality'=> $nationality,
            'religion'=> $religion,
            'birth_date'=> $birthday,
            'civil_status'=> $civilstatus,
            'siblings'=> $siblings,
            'ordinal_position'=> $ordinalpos,
            'presentadd1'=> $presentadd1,
            'presentadd2'=> $presentadd2,
            'presentadd3'=> $presentadd3,
            'presentadd4'=> $presentadd4,
            'presentadd5'=> $presentadd5,
            'presentadd6'=> $presentadd6,
            'permanentadd1'=> $permanentadd1,
            'permanentadd2'=> $permanentadd2,
            'permanentadd3'=> $permanentadd3,
            'permanentadd4'=> $permanentadd4,
            'permanentadd5'=> $permanentadd5,
            'permanentadd6'=> $permanentadd6,
            'home_phone'=> $homephone,
            'mobile_phone'=> $mobilephone,
            'email_add'=> $email,
            ]);

        if ($isInsertSuccesss) echo '<h1>Insert Success</h1><a href="dashboard">Home</a>';
        else echo '<h1>Insert Failed </h1>';   
        
    }
}
