<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bio', 'logoPath', 'created_by'];

    public function offices() {
        return $this->hasMany(Office::class);
    }

}
