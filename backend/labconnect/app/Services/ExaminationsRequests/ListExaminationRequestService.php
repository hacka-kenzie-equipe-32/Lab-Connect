<?php

namespace App\Services\ExaminationsRequests;

use App\Exceptions\AppError;
use App\Models\ExaminationRequest;

class ListExaminationRequestService {
    public function execute() {
        return ExaminationRequest::all();
    }

    public function find($id) {
        $examination = ExaminationRequest::find($id);

        if(is_null($examination)) {
            throw new AppError("ExaminationRequest {$id} not found", 404);
        }
        return ExaminationRequest::find($id);
    }
}