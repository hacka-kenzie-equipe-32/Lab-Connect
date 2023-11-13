<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Doctor;

class DeleteDoctorService {
    public function execute($id) {
        $doctor = Doctor::find($id);

        if(is_null($doctor)) {
            throw new AppError("User {$id} not found", 404);
        }

        $doctor->delete();

        return true;
    }
}

