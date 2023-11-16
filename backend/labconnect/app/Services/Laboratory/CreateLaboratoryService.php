<?php

namespace App\Services\Schedule;

use App\Models\Laboratory;

class CreateLaboratoryService {
    public function execute (array $data) {
        return Laboratory::create($data);
    }
}