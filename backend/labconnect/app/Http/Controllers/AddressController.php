<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Address\CreateAddressService;
use App\Services\Address\UpdateAddressService;

class AddressController extends Controller {
    public function create(Request $request) {
        $createAddressService = new CreateAddressService();

        $newUser = $createUserService->execute($request->all());

        return response()->json($newUser, 201);
    }

    public function update(Request $request, $id) {
        $updateUserService = new UpdateUserService();

        $user = $updateUserService->execute($id, $request->all());

        return response()->json($user, 200);
    }

}
