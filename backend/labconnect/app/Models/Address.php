<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model {

    protected $table = 'address';

    protected $fillable = [
        'street',
        'number',
        'complement',
        'zip_code',
        'city',
        'state',
        'country',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}