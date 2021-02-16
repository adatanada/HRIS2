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

        return view('loantype.loantypeindex')
        ->with([
            'data' => $this->loantype->get()
        ]);
    }

    public function Form($iD = null){        
      
        if ($iD  != null ){  
            $data = $this->loantype->find($iD);
                        return view('loantype.update_loantype')->with([
                        'data' => $data
                        ]);          
            
        }   

        return view('loantype.add_loantype');        
    }

    public function Save($iD = null){

        // $this->request->validate($this->rules);

        if ($iD != null){  
            $db = $this->loantype->find($iD)->update($this->request->except('_token'));                        
        }
        else {
            $db = $this->loantype->create($this->request->except('_token'));  
        }        
        
        return Redirect::route('loantype');        
    }

    public function Delete($iD)
    {
       $this->loantype->find($iD)->delete();

       return Redirect::route('loantype')->with([
        'success'=> 'Loan has been deleted!',
        'type' => 'danger'

        ]);
    }

}
