<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services\UserService;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUser(Request $request)
    {  
        $user = $this->userService->get($request->name);

        return view('users', ['user' => $user]);
    }
}
