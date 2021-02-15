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

    public function department_update($id)
    {
        return view('department.update-department')->with([
            'data' => $this->department->find($id)
        ]);
    }

    public function department_update_save($id)
    {
        $db = $this->department->find($id)->update($this->request->except('_token'));
        return Redirect::route('department')->with([
            'success' => 'Department has been updated !'
        ]);
    }

    public function department_delete($id)
    {
        $db = $this->department->findorfail($id)->delete();
        return Redirect::route('department');
    }
}

