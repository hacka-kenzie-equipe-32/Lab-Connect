<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExaminationRequest;
use App\Services\ExaminationsRequests\CreateExaminationRequestService;
use App\Services\ExaminationsRequests\DeleteExaminationRequestService;
use App\Services\ExaminationsRequests\ListExaminationRequestService;
use App\Services\ExaminationsRequests\UpdateExaminationRequestService;
use Illuminate\Http\Request;


class ExaminationRequestController extends Controller {
    public function create(CreateExaminationRequest $request) {
        $createExaminationRequest = new CreateExaminationRequestService();
        return $createExaminationRequest->execute($request->all());
    }

    public function listAll() {
        $listExaminations = new ListExaminationRequestService();
        return $listExaminations->execute();
    } 

    public function listOne($id) {
        $getExamination = new ListExaminationRequestService();
        return $getExamination->execute($id);
    }

  
    public function destroy($id) {
        $deleteExamination = new DeleteExaminationRequestService();
        $success = $deleteExamination->execute($id);

        return response()->json(['message' => 'Examination deleted successfully'], 200);
    }
}
