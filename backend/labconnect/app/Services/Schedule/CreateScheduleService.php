<?php

namespace App\Services\Schedule;

use App\Exceptions\AppError;
use App\Models\Schedule;
use App\Models\User;

class CreateScheduleService {
    public function execute (array $data) {
        $userFound = User::firstWhere('id', $data['userId']);

        if(is_null($userFound)) {
            throw new AppError('user not exists', 400);
        }
        
        return Schedule::create($data);
    }
}