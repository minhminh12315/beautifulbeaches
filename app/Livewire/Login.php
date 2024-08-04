<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $login_username;
    public $login_password;

    protected $rules = [
        'login_username' => 'required',
        'login_password' => 'required'
    ];

    protected $message = [
        'login_username.required' => 'Username is required',
        'login_password.required' => 'Password is required'
    ];

    // Logic Login
    public function login()
    {
        $this->validate([
            'login_username' => 'required',
            'login_password' => 'required'
        ]);

        $credentials = [
            'username' => $this->login_username,
            'password' => $this->login_password
        ];

        $user = User::where('username', $this->login_username)->first();

        if (Auth::attempt($credentials)) {
            // if(Auth::user()->status == 'inactive'){
            //     Auth::logout();
            //     return redirect()->route('verify_mail', $user->id);
            // }

            return redirect()->route('/'); // Redirect to dashboard if login successful.
        } else {
            $this->addError('login_failed', 'Invalid username or password. Please try again!');
            $this->login_password = '';
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
