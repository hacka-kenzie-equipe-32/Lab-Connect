<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;
use App\Models\Schedule;

class ListScheduleService {
    public function execute() {
        return Schedule::all();
    }

    public function find($id) {
        return Schedule::findOrFail($id);
    }
}
