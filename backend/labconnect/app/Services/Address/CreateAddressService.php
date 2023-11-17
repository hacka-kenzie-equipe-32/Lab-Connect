<?php

namespace App\Services\Address;

use App\Models\Address;

class CreateAddressService {
    public function execute (array $data) {
        return Address::create($data);
    }
}

