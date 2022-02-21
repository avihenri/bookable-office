<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'organisation_id',
        'name',
        'desc',
        'address',
        'city',
        'country_id',
        'post_code',
        'building_type',
        'office_type',
        'accessibility',
        'created_by'
    ];

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }
    
    public function meetingRooms(){
        return $this->hasMany(Room::class)->where('type', 'MEETING_ROOM');
    }

    public function desks()
    {
        return $this->hasManyThrough(Desk::class, Room::class);
    }
}
