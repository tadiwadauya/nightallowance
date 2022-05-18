<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [

        'paynumber',
        'first_name',
        'last_name',
        'pay_number',
    ];
    protected $table = 'drivers';
    protected $guarded = array();
}
