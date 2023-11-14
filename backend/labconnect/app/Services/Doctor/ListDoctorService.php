<?php

namespace App\Services\Doctor;

use App\Exceptions\AppError;
use App\Models\Doctor;

class ListDoctorService {
    public function execute() {
        return Doctor::all();
    }

    public function find($id) {
        $doctor = Doctor::find($id);

        if(is_null($doctor)) {
            throw new AppError("Doctor {$id} not found", 404);
        }
        return Doctor::find($id);
    }
}
