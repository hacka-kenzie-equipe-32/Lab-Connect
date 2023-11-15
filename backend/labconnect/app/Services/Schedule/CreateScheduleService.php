<?php

namespace App\Services\Schedule;

use App\Exceptions\AppError;
use App\Models\Schedule;

class CreateScheduleService {
    public function execute (array $data) {
        $userFound = Schedule::firstWhere('userId', $data['userId']);

        if(!is_null($userFound)) {
            throw new AppError('crm already exists', 400);
        }
        
        return Schedule::create($data);
    }
}