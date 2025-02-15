<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::paginate(5);

        return view('users.index', [
            'greeting' => 'Hello World!',
            'users' => $users
        ]);
    }

    public function show(User $user) 
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create() 
    {
        return view ('users.create');
    }

    public function store (Request $request) 
    {
        $input = $request->validate(([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'avatar' => 'file'
        ]));

        if (!empty($input['avatar']) && $input['avatar']->isValid())
        {
            $input['avatar']->store();
        }

        dd($input);
        // User::create($input);

        // return redirect()->back();
    }
}
