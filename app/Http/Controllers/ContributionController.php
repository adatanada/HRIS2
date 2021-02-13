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

    public function Index($type = null){

        return dd('Loan');
     }
 
     public function Create($type = null){
 
         return dd('create');
     }
 
     public function Update($id,$type = null){
 
         return dd($id);
     }
 
     public function Save($id,$type = null){
 
         return dd($id);
     }
}
