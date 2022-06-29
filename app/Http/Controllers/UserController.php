<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index() {
        return view('users.index', [
            'usersList' => User::paginate(10)
        ]);
    }

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

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);
        
        return redirect('/');
    }

    // Logout user
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/manage/groups');
        }

        return back()->withErrors(['login' => 'Invalid Credentials'])->onlyInput('login');
       
    }
}
