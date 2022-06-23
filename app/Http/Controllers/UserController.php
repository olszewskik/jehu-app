<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'login' => ['required', 'min:3', Rule::unique('users', 'login')],
            'name' => 'required',
            'surname' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        
        return redirect('/');
    }
}
