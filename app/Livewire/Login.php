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
        'login_password' => 'required',
        'email_recovery' => 'required|email',
        'rs_password' => 'required|min:6',
        'rs_cf_password' => 'required|min:6|same:password'
    ];

    protected $message = [
        'login_username.required' => 'Username is required',
        'login_password.required' => 'Password is required',
        'email_recovery.required' => 'Email is required',
        'email_recovery.email' => 'Please enter a valid email address',
        'rs_password.required' => 'New Password is required',
        'rs_password.min' => 'New Password should have more than 6 characters',
        'rs_cf_password.required' => 'Confirm New Password is required',
        'rs_cf_password.min' => 'Confirm New Password should have more than 6 characters',
        'rs_cf_password.same' => 'Confirm New Password should match with New Password'
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
            if (Auth::user()->status == 'inactive') {
                Auth::logout();
                return redirect()->route('verify_email', $user->id);
            } else {
                return redirect()->route('user.home'); // Redirect to dashboard if login successful.
            }
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
