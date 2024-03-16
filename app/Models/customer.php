<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',

        // Add other fillable attributes here
    ];
    use HasFactory;


}

