<?php

namespace App\Services\Doctor;

use App\Models\Schedule;

class DeleteScheduleService {
    public function execute($id) {
        $schedule = Schedule::findOrFail($id);

        $schedule->delete();

        return true;
    }
}

