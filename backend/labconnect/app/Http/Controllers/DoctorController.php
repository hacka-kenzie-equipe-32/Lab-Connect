<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Services\Doctor\{CreateDoctorService, DeleteDoctorService, ListDoctorService, UpdateDoctorService};
use Illuminate\Http\Request;

class DoctorController extends Controller {
    public function create(CreateDoctorRequest $request) {
        $createDoctorService = new CreateDoctorService();
        $doctor = $createDoctorService->execute($request->all());
        
        return response()->json($doctor, 201);
    }

    public function listAll($id) {
        $listDoctorService = new ListDoctorService();
        $doctor = $listDoctorService->find($id);

        return response()->json($doctor, 200);
    }
    
    public function listOne() {
        $listDoctorService = new ListDoctorService();
        $doctors = $listDoctorService->execute();
        
        return response()->json($doctors, 200);
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