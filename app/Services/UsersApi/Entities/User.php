<?php

namespace App\Services\UsersApi\Entities;

class User
{
    public string $name;
    public int $age;
    public string $email;
    public string $username;
    public array $address;
    public string $role;
    public string $logo;
    public function __construct(array $data)
    {
        $this->name = data_get($data, 'firstName') . " " . data_get($data, 'lastName');
        $this->age = data_get($data, 'age');
        $this->email = data_get($data, 'email');
        $this->username = data_get($data, 'username');
        $this->address = data_get($data, 'address');
        $this->role = data_get($data, 'role');
        $this->logo = data_get($data, 'image');
    }
}
