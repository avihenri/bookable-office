<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'item',
        'type',
        'organisation_id',
        'desc',
        'location_desc',
        'created_by'
    ];

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    public function desk() {
        $this->belongsToMany(Desk::class);
    }

    public $types = [
        'CABLE' => 'CABLE',
        'MONITOR' => 'MONITOR',
        'PERIPHERAL_DEVICE' => 'PERIPHERAL_DEVICE',
        'PHONE' => 'PHONE',
        'STAND' => 'STAND',
    ];
}
