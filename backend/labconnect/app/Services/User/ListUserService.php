<?php

namespace App\Services\User;

use App\Exceptions\AppError;
use App\Models\User;

class ListUserService {
    public function findAll() {
        return User::all();
    }

    public function findOne($id) {
        $findUser = User::find($id);

        if(is_null($findUser)) {
            throw new AppError("User {$id} not found", 404);
        }

        return $findUser;
    }
}