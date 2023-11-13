<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Doctor;

class UpdateDoctorService {
    public function execute($id, array $data) {
        $doctor = Doctor::find($id);

        if(is_null($doctor)) {
            throw new AppError("User {$id} not found", 404);
        }

        $doctor->update($data);

        return $doctor;
    }
}