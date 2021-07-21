<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function phone() {
        return $this->hasOne(Phone::class);
    }

    public function address() {
        return $this->hasOne(Address::class);
    }
}
