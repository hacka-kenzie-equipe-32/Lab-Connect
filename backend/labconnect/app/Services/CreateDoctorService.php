<?php

namespace App\Services;

use App\Models\Doctor;

class CreateDoctorService {
    public function execute (array $data) {
        return Doctor::create($data);
    }
}