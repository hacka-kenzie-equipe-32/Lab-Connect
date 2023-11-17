<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'examination';

    protected $fillable = [
        'name',
        'type'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
