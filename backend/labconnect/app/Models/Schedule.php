<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'schedules';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'userId',
        'status',
        'totalPrice',
        'paid',
    ];

    protected $casts = [
        'paid' => 'boolean', 
        'userId' => 'uuid',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
