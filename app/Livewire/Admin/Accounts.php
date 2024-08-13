<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Accounts extends Component
{
    public $users;
    public $userToDelete;
    public $userToEdit;

    public $fullname;
    public $email;
    public $role;

    public $phone;

    public function mount()
    {
        $this->users = User::all();
    }

    public function showAccountDelete($id) {
        $this->dispatch('toggleModalDelete')->self();
        $this->userToDelete = $id;
    }

    public function confirmDelete(){
        if($this->userToDelete){
            $user = User::find($this->userToDelete);
            if($user){
                $user->delete();
                $this->users = User::all();
                flash()->success('Account deleted successfully');
                $this->dispatch('closeModal')->self();
            }
            else{
                flash()->error('User not found');
                $this->dispatch('closeModal')->self();
            }
        }
    }

    public function showAccountEdit($id){
        $user = User::find($id);
        if($user){
            $this -> fullname = $user->fullname;
            $this -> email = $user->email;
            $this -> phone = $user ->phone;
            $this -> role = $user->role;
            $this->userToEdit = $id;
            $this->dispatch('toggleModalEdit')->self();
        }
        else{
            flash()->error('User not found');
            $this->dispatch('closeModal')->self();
        }

    }

    public function updateAccount(){
        $this->validate([
            'fullname' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users,email,'.$this->userToEdit],
            'role' => ['required','string','in:admin,user'],
            'phone' => ['required','string','max:10']
        ]);

        $user = User::find($this->userToEdit);
        if($user){
            $user->fullname = $this->fullname;
            $user->email = $this->email;
            $user->role = $this->role;
            $user->phone = $this->phone;
            $user->save();
            $this->users = User::all();
            flash()->success('Account updated successfully');
            $this->dispatch('closeModal')->self();
        }
        else{
            flash()->error('User not found');
            $this->dispatch('closeModal')->self();
        }
    }
    public function render()
    {
        return view('livewire.admin.accounts');
    }
}
