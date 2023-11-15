<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScheduleRequest;
use App\Models\Schedule;
use App\Services\Doctor\DeleteScheduleService;
use App\Services\Doctor\ListScheduleService;
use App\Services\Doctor\UpdateScheduleService;
use App\Services\Schedule\CreateScheduleService;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function create(CreateScheduleRequest $request)
    {
        $createScheduleService = new CreateScheduleService();
        $schedule = $createScheduleService->execute($request->all());
        
        return response()->json($schedule, 201);
    }

    public function listAll() {
        $listSchedulesService = new ListScheduleService();
        $schedules = $listSchedulesService->execute();
        
        return response()->json($schedules, 200);
    }
    public function listOne($id) {
        $listSchedulesService = new ListScheduleService();
        $schedule = $listSchedulesService->find($id);
        
        return response()->json($schedule, 200);
    }
    
    public function update(Request $request, $id) {

        $updateScheduleService = new UpdateScheduleService();
        $schedule = $updateScheduleService->execute($id, $request->all());

        return response()->json($schedule, 200);
    }

    
    public function destroy($id) {
        $deleteDoctorService = new DeleteScheduleService();

        $deleteDoctorService->execute($id);

        return response()->json(['message' => 'Schedule deleted successfully'], 204);
    }
}