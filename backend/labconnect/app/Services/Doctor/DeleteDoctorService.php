<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;

class DeleteDoctorService {
    public function execute($id) {
        $doctor = Doctor::find($id);

        if(is_null($doctor)) {
            throw new AppError("Doctor {$id} not found", 404);
        }

        $doctor->delete();

        return true;
    }
}

