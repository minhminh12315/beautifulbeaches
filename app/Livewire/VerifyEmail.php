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
        $user = User::find($this->userId);

        $now = Carbon::now();
        $otp_expiration_date = Carbon::parse($user->otp_expiration);

        if ($user->otp === $this->otp) {
            Log::info('asdcasd');
            if ($now->gt($otp_expiration_date)) {
                $this->addError('otp', 'OTP expired. Please request a new one.');
                Log::info('hgfsdfsfgdsd');
                return;
            } else {
                $user->status = 'active';
                $user->save();
                Auth::login($user);
                return redirect()->route('dashboard');
            }
        } else {
            $this->addError('otp', 'Invalid OTP. Please try again.');
        }
    }

    public function resetOtp()
    {
        $this->notification = ('A new OTP has been sent to your email!');
        
        $this->mount();
        $this->sendNewOtp();
    }

    public function sendNewOtp(){
        $user = User::find($this->userId);

        $this->newOtp = Str::random(6);
        $this->otp_new_expiration = now()->addMinutes(2);

        $user->otp = $this->newOtp;
        $user->otp_expiration = $this->otp_new_expiration;
        $user->save();

        Mail::to($user->email)->send(new SendOtp($this->newOtp));
    }
    public function render()
    {
        return view('livewire.verify-email');
    }
}
