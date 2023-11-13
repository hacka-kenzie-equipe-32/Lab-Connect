<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Services\CreateDoctorService;
use App\Services\ListDoctorService;
use App\Services\UpdateDoctorService;
use App\Services\DeleteDoctorService;
use Illuminate\Http\Request;

class DoctorController extends Controller {
    public function create(CreateDoctorRequest $request) {
        $createDoctorService = new CreateDoctorService();
        
        return $createDoctorService->execute($request->all());
    }

    public function index() {
        $listDoctorService = new ListDoctorService();
        $doctors = $listDoctorService->execute();
        return response()->json($doctors, 200);
    }

    public function show($id) {
        $listDoctorService = new ListDoctorService();
        $doctor = $listDoctorService->find($id);

        return response()->json($doctor, 200);
    }

    public function update(Request $request, $id) {
        $updateDoctorService = new UpdateDoctorService();
        $doctor = $updateDoctorService->execute($id, $request->all());

        return response()->json($doctor, 200);
    }

    public function destroy($id) {
        $deleteDoctorService = new DeleteDoctorService();
        $success = $deleteDoctorService->execute($id);

        return response()->json(['message' => 'Doctor deleted successfully'], 200);
    }
}