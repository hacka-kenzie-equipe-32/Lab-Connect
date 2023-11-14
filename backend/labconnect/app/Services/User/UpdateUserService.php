<?php

namespace App\Services\User;

use App\Exceptions\AppError;
use App\Models\User;

class UpdateUserService {
    public function execute($id, array $data) {
        $findUser = User::find($id);

        // Implementar lógica de atualizar apenas o seu usuário se for "user", admin atualiza todos.

        if(is_null($findUser)) {
            throw new AppError("User {$id} not found", 404);
        }

        $findUser->update($data);

        return $findUser;
    }
}