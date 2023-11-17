<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaminationResult extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'examination';

    protected $fillable = [
        'result'
    ];

    public function examinationRequest() {
        return $this->belongsTo(ExaminationRequest::class);
    }

    public function laboratory() {
        return $this->belongsTo(Laboratory::class);
    }
}
