<?php

namespace App\Services\Address;

use App\Exceptions\AppError;
use App\Models\Address;

class UpdateAddressService {
    public function execute($user_id, array $data) {
        $findAddress = Address::findOne($user_id);

        // Implementar lógica de atualizar apenas o seu usuário se for "user", admin atualiza todos.

        if(is_null($findAddress)) {
            throw new AppError("Address not found", 404);
        }

        $findAddress->update($data);

        return $findAddress;
    }
}