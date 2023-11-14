<?php

namespace App\Services\ExaminationsRequests;

use App\Exceptions\AppError;
use App\Models\ExaminationRequest;

class DeleteExaminationRequestService {
    public function execute($id) {
        $examination = ExaminationRequest::find($id);

        if(is_null($examination)) {
            throw new AppError("ExaminationRequest {$id} not found", 404);
        }

        $examination->delete();
        
        return true;
    }
}