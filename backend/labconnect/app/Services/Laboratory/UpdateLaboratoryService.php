<?php

namespace App\Services\Doctor;

use App\Models\Laboratory;

class UpdateLaboratoryService {
    public function execute($id, array $data) {
        
        $laboratory  = Laboratory::findOrFail($id);

        $laboratory->update($data);

        return $laboratory;
    }
}