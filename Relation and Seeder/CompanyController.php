<?php

namespace App\Http\Controllers;
use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function getcompany(){
        return \App\Models\company::with('employee')->get();
    }
    
}
