<?php

namespace App\Services\UsersApi;

use App\Services\UsersApi\Endpoints\HasUsers;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class UserService
{
    use HasUsers;

    public $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('https://dummyjson.com');
    }
}
