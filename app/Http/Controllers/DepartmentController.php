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

    public function index()
    {
        return view('home')->with([
            'departments' => $this->department->all()
        ]);
    }

    public function department()
    {
        return view('department.department');
    }

    public function department_add()
    {
        return view('department.add-department');
    }

    public function department_save()
    {
        return dd($this->department);

        $db = $this->department->create(
            $this->request->except('_token')
        );

        return Redirect::route('department.department');
    }
}

