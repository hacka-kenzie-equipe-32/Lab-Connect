<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\User\CreateUserService;
use App\Services\User\ListUserService;
use App\Services\User\UpdateUserService;
use App\Services\User\DeleteUserService;

class UserController extends Controller {
    public function create(Request $request) {
        $createUserService = new CreateUserService();

        $newUser = $createUserService->execute($request->all());

        return response()->json($newUser, 201);
    }

    public function listAll(Request $request) {
        $listUserService = new ListUserService();

        $allUsers = $listUserService->findAll();

        return response()->json($allUsers, 200);
    }

    public function listOne(Request $request, $id) {
        $listUserService = new ListUserService();

        $user = $listUserService->findOne($id);

        return response()->json($user, 200);
    }

    public function update(Request $request, $id) {
        $updateUserService = new UpdateUserService();

        $user = $updateUserService->execute($id, $request->all());

        return response()->json($user, 200);
    }

    public function delete($id) {
        $deleteUserService = new DeleteUserService();

        $user = $deleteUserService->execute($id);

        return response()->json(['Doctor deleted successfully'], 204);
    }

}
