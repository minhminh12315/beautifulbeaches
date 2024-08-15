<?php

namespace App\Livewire\Infor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'currentPassword' => 'required',
                'newPassword' => [
                    'required',
                    'min:8',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
                ],
                'confirmPassword' => 'required|same:newPassword'
            ],
            [
                'currentPassword.required' => 'Current password is required',
                'newPassword.required' => 'New password is required',
                'newPassword.min' => 'New password must be at least 8 characters long',
                'newPassword.confirmed' => 'New password and confirm password must match',
                'newPassword.regex' => 'New password must contain at least one lowercase letter, one uppercase letter, and one number',
                'confirmPassword.required' => 'Confirm password is required',
                'confirmPassword.same' => 'Confirm password and new password must match',
            ]
        );
    }

    public function changePassword()
    {
        try {
            $user = Auth::user();

            if (! Hash::check($this->currentPassword, $user->password)) {
                $this->addError('currentPassword', 'Current password does not match');
            }

            if ($this->newPassword) {
                if ($this->newPassword === $this->confirmPassword) {
                    $user->password = Hash::make($this->newPassword);
                    $user->save();
                    $this->currentPassword = '';
                    $this->newPassword = '';
                    $this->confirmPassword = '';
                    session()->flash('message', 'Password has been updated successfully');
                }
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong! Please try again');
        }
    }

    public function render()
    {
        return view('livewire.infor.change-password');
    }
}
