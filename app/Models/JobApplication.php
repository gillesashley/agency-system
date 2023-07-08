<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'middlename',
        'surname',
        'email',
        'phonenumber',
        'position',
        'address',
        'postcode',
        'criminal_conviction',
        'criminal_offence',
        'employment_history',
    ];
}
