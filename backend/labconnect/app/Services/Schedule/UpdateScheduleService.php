<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;
use App\Models\Schedule;

class UpdateScheduleService {
    public function execute($id, array $data) {
        
        $schedule = Schedule::findOrFail($id);

        $schedule->update($data);

        return $schedule;
    }
}