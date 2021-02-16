<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribution;
use Redirect;

class ContributionController extends Controller
{
    protected $contribution;
    protected $request;

    protected $rules = [
        'range' => 'required '
        ,'monthly' => 'required '
        ,'employeeshare' => 'required '
        ,'employershare' => 'required '
    ];

    
    public function __construct(Request $request, Contribution $contribution)
    {
        $this->contribution    = $contribution;
        $this->request         = $request;
    }

    public function Index($type){

        return view('contribution.contributionindex')
        ->with([
            'data' => $this->contribution->where('type', '=', $type)
            ->get()
        ]);
    }

    public function Form($type,$iD = null){ 
        if ($iD  != null ){  
            $data = $this->contribution->find($iD);
                        return view('contribution.update_contribution')->with([
                        'data' => $data
                        ]); 
        }   

        return view('contribution.add_contribution');        
    }

    public function Save($iD = null){

        // $this->request->validate($this->rules);

        if ($iD != null){  
            $db = $this->contribution->find($iD)->update($this->request->except('_token'));                        
        }
        else {
            $db = $this->contribution->create($this->request->except('_token'));  
            //    $db = $this->contribution->create([
            //         'type' => $this->request->type
            //         ,'range' => $this->request->range
            //         ,'monthly' => $this->request->monthly
            //         ,'employeeshare' => $this->request->employeeshare
            //         ,'employershare' => $this->request->employershare
            //     ]);
        }   

        // $this->Index($this->request->type);
        // return dd($this);

        return Redirect::route('contribution',[$this->request->type]);    
            
    }

    public function Delete($iD)
    {
       $this->contribution->find($iD)->delete();

       return Redirect::route('contribution')->with([
        'success'=> 'Contribution has been deleted!',
        'type' => 'danger'

        ]);
    }
}
