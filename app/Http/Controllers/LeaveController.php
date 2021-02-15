<?php

namespace App\Http\Controllers;
use App\Models\Leave;
use Illuminate\Http\Request;
use Redirect;

class LeaveController extends Controller
{
    public function leave()
    {
        return view('leave');
        
        }
}
