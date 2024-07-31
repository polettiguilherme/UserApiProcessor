<?php

namespace App\Services\UsersApi\Endpoints;

use App\Services\UsersApi\Entities\User;
use App\Services\UsersApi\UserService;

class Users
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function get()
    {
        return $this->transform(
            $this->service
                ->api
                ->get('/users')
                ->json()
        );
    }

    public function transform(mixed $json)
    {
        return collect($json['users'])
            ->map(function ($item) {
                return new User($item);
            });
    }
}
