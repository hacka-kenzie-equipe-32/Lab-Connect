<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'doctors';

    protected $fillable = [
        'name',
        'speciality',
        'crm'
    ];
}
