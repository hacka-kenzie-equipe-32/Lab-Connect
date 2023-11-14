<?php

namespace App\Services\User;


use App\Exceptions\AppError;
use App\Models\User;

class DeleteUserService {
    public function execute($id) {
        $findUser = User::find($id);

        //Implementar lógica de "deletar" apenas o seu usuário se for "user", admin "deleta" qualquer usuário.

        if(is_null($findUser)) {
            throw new AppError("User {$id} not found", 404);
        }

        $findUser->delete();

        return true;
    }
}