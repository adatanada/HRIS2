<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory,SoftDeletes;

    
    protected $table = 'loan';

    protected $fillable = [
        'employeeid'
        ,'loantypeid'
        ,'loanamount' 
        ,'month' 
        ,'notes' 
        ,'created_at'
        ,'updated_at'
    ];
}
