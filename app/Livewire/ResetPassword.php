<?php

namespace App\Livewire;

use App\Mail\SendOtp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ResetPassword extends Component
{
    public $email_recovery;
    public $rs_otp;
    public $rs_password_otp;
    public $otp_rs_expiration;
    public $rs_password;
    public $userId;
    public $notification;

    protected $rules = [
        'email_recovery' => 'required|email',
        'rs_otp' => 'required',
        'rs_password' => 'required|min:6'
    ];

    protected $message = [
        'email_recovery.required' => 'Email is required',
        'email_recovery.email' => 'Please enter a valid email address',
        'rs_otp.required' => 'OTP is required',
        'rs_password.required' => 'New Password is required',
        'rs_password.min' => 'New Password should have more than 6 characters',
    ];
    public function resetPassword()
    {
        $this->notification = null;
        $this->validate([
            'email_recovery' => $this->rules['email_recovery'],
            'rs_otp' => $this->rules['rs_otp'],
            'rs_password' => $this->rules['rs_password']
        ]);

        $user = User::where('email', $this->email_recovery)->first();

        if (!$user) {
            $this->addError('email_recovery', 'Email is not valid. Please try again.');
            return;
        }

        if ($user->status == 'active') {
            $now = Carbon::now();
            if ($user->otp === $this->rs_otp) {
                if ($now->gt($this->otp_rs_expiration)) {
                    $this->addError('otp', 'OTP expired. Please request a new one.');
                    return;
                } else {
                    $user->password = Hash::make($this->rs_password);
                    $user->save();
                    return redirect()->route('login');
                }
            } else {
                $this->addError('otp', 'Invalid OTP. Please try again.');
            }
        } else {
            return redirect()->route('verify_email', $user->id);
        }
    }

    public function recoveryOtp()
    {
        try {
            try {
                $user = User::where('email', $this->email_recovery)->first();

                if (!$user) {
                    $this->addError('email_recovery', 'Email is not valid. Please try again.');
                    return;
                }

                if ($user->status === 'active') {
                    $this->notification = 'A new OTP has been sent to your email!';

                    $this->rs_password_otp = Str::random(6);
                    $this->otp_rs_expiration = now()->addMinutes(2);

                    $user->otp = $this->rs_password_otp;
                    $user->otp_expiration = $this->otp_rs_expiration;
                    $user->save();

                    Mail::to($user->email)->send(new SendOtp($this->rs_password_otp));
                } else {
                    return redirect()->route('verify_email', $user->id);
                }
            } catch (\Exception $e) {
                Log::error('Error sending new OTP: ' . $e->getMessage());
                $this->addError('otp', 'An error occurred while sending new OTP. Please try again later.');
            }
        } catch (\Exception $e) {
            Log::error('Error resetting OTP: ' . $e->getMessage());
            $this->addError('otp', 'An error occurred while resetting OTP. Please try again later.');
        }
    }
    public function render()
    {
        return view('livewire.reset-password');
    }
}
