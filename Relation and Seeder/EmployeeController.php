<?php

namespace App\Http\Controllers;

use App\Models\employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function getemployee(){

    return \App\Models\employee::with(['company','role'])->get();

}

   
}