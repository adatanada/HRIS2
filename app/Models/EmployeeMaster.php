<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeMaster extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'employee_master';

    protected $fillable = [
        'fname'
        ,'lname'
        ,'mname'
        ,'contact'
        ,'address'
        ,'birhtday'
        ,'gender'
        ,'designation' 
        ,'salary' 
        ,'file_path' 
        ,'sssid' 
        ,'pagibigid'
        ,'philhealthid'
        ,'departmentid'
        ,'created_at'
        ,'updated_at'
    ];
    
}
