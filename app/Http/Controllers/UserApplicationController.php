<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Application_table;

class UserApplicationController extends Controller
{
    function ApplicationIndex() {
        return view ('application-form');
    }

    function DataInsert (Request $request) {
        $name = $request ->  input ('name');
        $phone = $request -> input ('phone');
        $address = $request -> input ('address');

        $isInsertSuccesss = Application_table::insert([
            'name' => $name, 
            'phone'=> $phone,
            'address' => $address,
            ]);

        if ($isInsertSuccesss){ 
            return redirect('applicant/dashboard')->with('success', 'Data inserted successfully'); 
        }
        else echo '<h1>Insert Failed </h1>';   
        
    }
}
