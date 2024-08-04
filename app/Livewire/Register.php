<?php

namespace App\Livewire;

use App\Mail\SendOtp;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;


class Register extends Component
{
    public $username;
    public $email;
    public $city_id;
    public $password;
    public $password_confirmation;
    public $otp;
    public $otp_expiration;
    public $verification_code;

    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|',
        'password_confirmation' => 'required|min:6|same:password'
    ];

    protected $messages = [
        'username.required' => 'Username is required',
        'username.unique' => 'Username already exists',
        'email.required' => 'Email is required',
        'email.email' => 'Please enter a valid email address',
        'email.unique' => 'Email already exists!',
        'password.required' => 'Password is required',
        'password.min' => 'Password must be at least 6 characters',
        'password_confirmation.required' => 'Confirm Password is required',
        'password_confirmation.min' => 'Confirm Password must be at least 6 characters long',
        'password_confirmation.same' => 'Password and Confirm Password does not match'
    ];

    public function register(){

        $this->validate([
            'username' => $this->rules['username'],
            'email' => $this->rules['email'],
            'password' => $this->rules['password'],
            'password_confirmation' => $this->rules['password_confirmation']
        ], $this->messages);

        $this->otp = Str::random(6);
        $this->otp_expiration = now()->addMinutes(2);

        $user = new User;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->city_id = $this->city_id;
        $user->password = Hash::make($this->password);
        $user->otp = $this->otp;
        $user->otp_expiration = $this->otp_expiration;
        $user->save();

        $userId = $user->id;

        // Send OTP to User's Email
        Mail::to($this->email)->send(new SendOtp($this->otp));

        $this->reset(['username', 'email', 'city_id', 'password', 'password_confirmation']);

        return redirect()->route('verify_email', $userId);

    }
    public function render()
    {
        return view('livewire.register');
    }
}
