<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'number',
        'name',
        'length_cm',
        'type',
        'created_by'
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function contents() {
        return $this->belongsToMany(Content::class);
    }
}
