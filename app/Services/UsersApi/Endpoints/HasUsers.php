<?php

namespace App\Services\UsersApi\Endpoints;

trait HasUsers
{
    public function users()
    {
        return new Users();
    }
}
