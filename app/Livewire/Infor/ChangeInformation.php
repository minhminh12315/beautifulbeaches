<?php

namespace App\Livewire\Infor;

use App\Models\Cities;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChangeInformation extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $fullname;
    public $phone;
    public $city;
    public $city_id;
    public $cities;
    public $hasChange = false;
    public $avatar;
    public $new_avatar;

    public $original_fullname;
    public $original_name;
    public $original_email;
    public $original_phone;
    public $original_city;

    public $showMain = false;

    public function mount()
    {
        $user = User::with('city')->find(auth()->user()->id);
        
        $this->city = $user->city;
        $this->fullname = $user->fullname;
        $this->name = $user->username;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->cities = Cities::all();
        $this->avatar = $user->avatar;
        Log::info($this->avatar);
        $this->original_fullname = $this->fullname;
        $this->original_name = $this->name;
        $this->original_email = $this->email;
        $this->original_phone = $this->phone;
    }

    public function updated($field)
    {
        Log::info($field);

        switch ($field) {
            case 'new_avatar':
                try {
                    if (
                        $this->fullname !== $this->original_fullname ||
                        $this->name !== $this->original_name ||
                        $this->email !== $this->original_email ||
                        $this->phone !== $this->original_phone ||
                        $this->city !== $this->original_city
                    ) {
                        $this->hasChange = true;
                    }

                    $this->validate([
                        'new_avatar' => 'image|mimes:jpg,jpeg,png,gif'
                    ], [
                        'new_avatar.image' => 'The file must be an image (jpg, jpeg, png, gif)',
                        'new_avatar.mimes' => 'The file must be a file of type: jpg, jpeg, png, gif',
                    ]);
                } catch (Exception $e) {
                    $this->reset('new_avatar');
                    throw $e;
                }
                break;
            case 'fullname':
                $this->hasChange = true;
            case 'name':
                $this->hasChange = true;
            case 'email':
                $this->hasChange = true;
            case 'phone':
                $this->hasChange = true;
            case 'city_id':
                $this->hasChange = true;

                // Add more cases for other fields if needed
            default:
                break;
        }
    }

    public function update_information()
    {
        try {
            $user = Auth::user();
            Log::info($user);

            if ($this->fullname) {
                $user->fullname = $this->fullname;
            }

            if ($this->name) {
                $user->username = $this->name;
            }

            if ($this->email) {
                $user->email = $this->email;
            }

            if ($this->phone) {
                $user->phone = $this->phone;
            }

            if ($this->city_id) {
                $user->city_id = $this->city_id;
            }

            if ($this->new_avatar) {
                $imageName = time() . '_' . $this->new_avatar->getClientOriginalName();
                $imagePath = $this->new_avatar->storeAs('public/assets/images', $imageName);
                $publicPath = 'assets/images/' . $imageName;
                $user->avatar = $publicPath;
            }

            $user->save();
            $this->dispatch('swalsuccess', [
                'title' => 'Congartulation!',
                'text' => 'You have successfully changed your information !',
                'icon' => 'success',
            ]);
            $this->hasChange = false;
            $this->mount();
        } catch (Exception $e) {
            Log::info($e);
            flash()->error('Something went wrong!');
        }
    }

    public function render()
    {
        return view('livewire.infor.change-information');
    }
}
