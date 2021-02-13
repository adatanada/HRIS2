<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Redirect;

class LoanController extends Controller
{
    protected $loan;
    protected $request;

    protected $rules = [
        'employeeid' => 'required '
        ,'loantypeid' => 'required '
        ,'loanamount' => 'required '
        ,'month' => 'required '
        ,'notes' => 'required '
    ];
    
    public function __construct(Request $request, Loan $loan)
    {
        $this->loan    = $loan;
        $this->request = $request;
    }

    
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
