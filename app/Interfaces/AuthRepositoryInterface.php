<?php

namespace App\Interfaces;

interface AuthRepositoryInterface {

    public function storeNewUser(array $userData);
}
