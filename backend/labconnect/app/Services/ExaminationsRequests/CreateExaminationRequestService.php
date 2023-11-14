<?php

namespace App\Services\ExaminationsRequests;

use App\Exceptions\AppError;
use App\Models\ExaminationRequest;

class CreateExaminationRequestService {
    public function execute(array $data) {
        if (empty($data['user_id']) || empty($data['doctor_id'])) {
            throw new AppError('user_id and doctor_id cannot be empty', 400);
        }

        return ExaminationRequest::create($data);
    }
}