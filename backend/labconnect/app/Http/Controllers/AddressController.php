<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Address\CreateAddressService;
use App\Services\Address\UpdateAddressService;
use App\Http\Requests\CreateAddressRequest;

class AddressController extends Controller {
    public function create(CreateAddressRequest $request) {
        $createAddressService = new CreateAddressService();

        $newAddress = $createAddressService->execute($request->all());

        return response()->json($newAddress, 201);
    }

    public function update(UpdateAddressRequest $request, $user_id) {
        $updateAddressService = new UpdateAddressService();

        $user = $updateAddressService->execute($user_id, $request->all());

        return response()->json($user, 200);
    }

}
