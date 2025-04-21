<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'state_id',
        'street',
        'complement',
        'number',
        'neighborhood',
        'city',
        'cep',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
