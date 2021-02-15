<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeMaster;
use Redirect;

class EmployeeMasterController extends Controller
{
    protected $loan;
    protected $request;

    protected $rules = [
        'fname' => 'required'
        ,'lname' => 'required'
        ,'mname' => 'required'
        ,'contact' => 'required'
        ,'address' => 'required'
        ,'birhtday' => 'required'
        ,'gender' => 'required'
        ,'designation' => 'required'
        ,'salary' => 'required'
        ,'file_path' => 'required'
        ,'sssid' => 'required'
        ,'pagibigid'=> 'required'
        ,'philhealthid' => 'required'
        ,'departmentid' => 'required'
    ];

    public function Index(){

        return dd('Loan');
     }
 
     public function Create(){
 
         return dd('create');
     }
 
     public function Update($id){
 
         return dd($id);
     }
 
     public function Save($id,$type = null){
 
         return dd($id);
     }
}

