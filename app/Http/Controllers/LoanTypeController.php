<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanType;
use Redirect;

class LoanTypeController extends Controller
{
    protected $loantype;
    protected $request;

    protected $rules = [
        'type' => 'required '
        ,'description' => 'required '
    ];

    public function __construct(Request $request, LoanType $loantype)
    {
        $this->loantype    = $loantype;
        $this->request     = $request;
    }

    public function Index(){

       return dd('LoanType');
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
