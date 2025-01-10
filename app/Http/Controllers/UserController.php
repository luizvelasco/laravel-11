<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return 'Hello World';
    }

    public function show(User $user) 
    {
        return $user;
    }
}
