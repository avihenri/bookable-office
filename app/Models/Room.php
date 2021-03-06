<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'name',
        'type',
        'max_capacity',
        'created_by',
    ];


    public function office() {
        return $this->belongsTo(Office::class);
    }

    public function desks() {
        return $this->hasMany(Desk::class);
    }

}
