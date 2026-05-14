<?php

namespace App\Http\Controllers;
use App\models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function getrole(){
        return \App\Models\role::with('employee')->get();
    }
    }
