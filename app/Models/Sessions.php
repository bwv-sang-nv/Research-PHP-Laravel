<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;
    protected $table = 'sessions';


    // Accessor 
    public function getUserPayloadAttribute($value) { 
        return $value;
    }

    // // mutator
    // public function setPayloadAttribute($value)
    // {
    //     $this->attributes['payload'] = 'dude';
    // }

    protected $casts = [
        'payload' => AsStringable::class,
    ];
}
