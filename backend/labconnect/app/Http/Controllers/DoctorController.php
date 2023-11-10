<?php

namespace App\Http\Controllers;

use App\Services\CreateDoctorService;
use Illuminate\Http\Request;

class DoctorController extends Controller {
    public function create(Request $request) {
        $createDoctorService = new CreateDoctorService();
        
        return $createDoctorService->execute($request->all());
    }
}