<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Redirect;

class DepartmentController extends Controller
{

    protected $department;
    protected $request;

    public function __construct(Request $request, Department $department)
    {
        $this->request = $request;
        $this->department = $department;
    }

    public function index()
    {
        return view('home');
    }

    public function department()
    {
        return view('department.department')
        ->with([
            'departments' => $this->department->all()
        ]);
    }

    public function department_add()
    {

        return view('department.add-department');
    }

    public function department_save()
    {
        
        $db = $this->department->create(
            $this->request->except('_token')
        );

        return Redirect::route('department');
    }
}

