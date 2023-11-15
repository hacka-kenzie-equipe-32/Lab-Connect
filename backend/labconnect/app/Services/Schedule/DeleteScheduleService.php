<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;

class DeleteScheduleService {
    public function execute($id) {
        $schedule = Doctor::findOrFail($id);

        $schedule->delete();

        return true;
    }
}

