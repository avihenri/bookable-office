<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso_code',
        'name',
        'nicename',
        'iso3_code',
        'm49_code',
        'phone_code',
    ];
}
