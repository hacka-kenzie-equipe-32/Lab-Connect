<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;

class CreateDoctorService {
    public function execute (array $data) {
        $doctorFound = Doctor::firstWhere('crm', $data['crm']);

        if(!is_null($doctorFound)) {
            throw new AppError('crm already exists', 400);
        }
        
        return Doctor::create($data);
    }
}