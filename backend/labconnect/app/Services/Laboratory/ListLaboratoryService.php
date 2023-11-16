<?php

namespace App\Services\Doctor;

use App\Models\Laboratory;


class ListLaboratoryService {
    public function execute() {
        return Laboratory::all();
    }

    public function find($id) {
        return Laboratory::findOrFail($id);
    }
}
