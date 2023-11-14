<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaminationRequest extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'examination_requests';

    protected $fillable = [
        'user_id',
        'doctor_id',
    ];
}
