<?php

namespace App\Repository\Auth;

interface AuthRepositoryInterface
{
    public function login(array $credentials);
}


