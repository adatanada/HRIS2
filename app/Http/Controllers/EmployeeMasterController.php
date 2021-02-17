<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeMaster;
use Redirect;

class EmployeeMasterController extends Controller
{
    protected $employee;
    protected $request;

    // protected $rules = [
    //     'fname' => 'required'
    //     ,'lname' => 'required'
    //     ,'mname' => 'required'
    //     ,'contact' => 'required'
    //     ,'address' => 'required'
    //     ,'birhtday' => 'required'
    //     ,'gender' => 'required'
    //     // ,'designation' => 'required'
    //     // ,'salary' => 'required'
    //     // ,'file_path' => 'required'
    //     // ,'sssid' => 'required'
    //     // ,'pagibigid'=> 'required'
    //     // ,'philhealthid' => 'required'
    //     // ,'departmentid' => 'required'
    // ];

    public function __construct(Request $request, EmployeeMaster $employee)
    {
        $this->request = $request;
        $this->employee = $employee;
    }

    public function index(){

        return view('home');
     }
 
     public function employee(){
 
        return view('employee.employee')
        ->with([
            'employee' => $this->employee->all()
        ]);
     }
  
     public function employee_create(){
 
        return view('employee.add-employee');
     }
 
     public function employee_save(){
 
        $db = $this->employee->create(
            $this->request->except('_token')
        );

        return Redirect::route('employee');
     }

     public function employee_update($id)
     {
        return view('employee.update-employee')->with([
            'data' => $this->employee->find($id)
        ]);
     }

     public function employee_update_save($id)
     {
        $db = $this->employee->find($id)->update($this->request->except('_token'));
        return Redirect::route('employee');
     }
}

