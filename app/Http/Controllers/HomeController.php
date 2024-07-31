<?php

namespace App\Http\Controllers;

use App\Services\UsersApi\UserService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function users(Request $request)
    {
        $service = new UserService();
        $users = $service->users()->get();
        $state = $request->input('state');

        $users = $users->groupBy(function ($user) {
                return $user->address['state'];
            })->map(function ($users) {
                return $users->sortBy('name');
            })->sortKeys()->collapse();

        $stateList = $users->map(function ($user) {
                return $user->address['state'];
            })->unique()->sort()->values();


        if ($state && $state !== 'Todos') {
            $users = $users->filter(function ($user) use ($state) {
                return $user->address['state'] === $state;
            });
        }
        $users = $users->values()->toArray();

        return ['users' => $users,'stateList' => $stateList];
    }
}
