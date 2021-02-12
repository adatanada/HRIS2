<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    protected $department;
    protected $request;

    public function __construct(Request $request, Department $department)
    {
        $this->request = $request;
        $this->department = $department;
    }

    public function department()
    {
        return view('department');
    }
}
