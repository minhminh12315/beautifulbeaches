<?php

namespace App\Livewire;

use App\Mail\SendOtp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class VerifyEmail extends Component
{
    public $otp;
    public $newOtp;
    public $otp_new_expiration;
    public $userId;
    public $notification;
    public function mount($id)
    {
        $this->userId = $id;
    }

    public function verifyEmail()
    {
        $this->notification = null;
        try {
            $user = User::find($this->userId);

            if (!$user) {
                $this->addError('user', 'User not found.');
                return;
            }

            $now = Carbon::now();
            $otp_expiration_date = Carbon::parse($user->otp_expiration);

            if ($user->otp === $this->otp) {
                if ($now->gt($otp_expiration_date)) {
                    $this->addError('otp', 'OTP expired. Please request a new one.');
                    return;
                } else {
                    $user->status = 'active';
                    $user->email_verified_at = Carbon::now();
                    $user->save();
                    Auth::login($user);
                    return redirect()->route('user.home');
                }
            } else {
                $this->addError('otp', 'Invalid OTP. Please try again.');
            }
        } catch (\Exception $e) {
            Log::error('Error verifying email: ' . $e->getMessage());
            $this->addError('otp', 'An error occurred. Please try again later.');
        }
    }

    public function resetOtp()
    {
        $this->notification = 'A new OTP has been sent to your email!';
        try {
            $this->sendNewOtp();
        } catch (\Exception $e) {
            Log::error('Error resetting OTP: ' . $e->getMessage());
            $this->addError('otp', 'An error occurred while resetting OTP. Please try again later.');
        }
    }

    public function sendNewOtp()
    {
        try {
            $user = User::find($this->userId);

            if (!$user) {
                $this->addError('user', 'User not found.');
                return;
            }

            $this->newOtp = Str::random(6);
            $this->otp_new_expiration = now()->addMinutes(2);

            $user->otp = $this->newOtp;
            $user->otp_expiration = $this->otp_new_expiration;
            $user->save();

            Mail::to($user->email)->send(new SendOtp($this->newOtp));
        } catch (\Exception $e) {
            Log::error('Error sending new OTP: ' . $e->getMessage());
            $this->addError('otp', 'An error occurred while sending new OTP. Please try again later.');
        }
    }

    public function render()
    {
        return view('livewire.verify-email');
    }
}
