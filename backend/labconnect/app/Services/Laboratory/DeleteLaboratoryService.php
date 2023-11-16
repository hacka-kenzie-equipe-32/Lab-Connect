<?php

namespace App\Services\Doctor;

use App\Models\Laboratory;

class DeleteLaboratoryService {
    public function execute($id) {
        $laboratory = Laboratory::findOrFail($id);

        $laboratory->delete();

        return true;
    }
}

