<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'contribution';

    protected $fillable = [
        'range'
        ,'monthly'
        ,'employeeshare' 
        ,'employershare' 
        ,'type' 
        ,'created_at'
        ,'updated_at'
    ];
}
