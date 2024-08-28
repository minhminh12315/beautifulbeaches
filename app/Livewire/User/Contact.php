<?php
namespace App\Livewire\User;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\PendingFeedback; // Sử dụng mô hình PendingFeedback
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;
use App\Models\Images;
use App\Models\Texts;

class Contact extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $content;
    public $MobilePhone;
    public $TitleImage;
    public $Administration_number;
    public $technical_number;
    public $operator_Address;
    public $Contact_Consulting;
    public $Quotes;
    public $Agency_Address;

    public function mount(){
        $this->TitleImage = Images::Where('type','Contact_Title')
        ->first();
        $this->MobilePhone = Texts::Where('type','MobilePhone')
        ->first();
        $this->Administration_number = Texts::Where('type','Administration_number')
        ->first();
        $this->technical_number = Texts::Where('type','technical_number')
        ->first();
        $this->Agency_Address = Texts::Where('type','Agency_Address')
        ->first();
        $this->operator_Address = Texts::Where('type','operator_Address')
        ->first();
        $this->Contact_Consulting = Texts::Where('type','Contact_Consulting')
        ->first();
        $this->Quotes = Texts::Where('type','Contact_quotes')
        ->first();


    }

    public function feedback()
    {
        $this->validate();

        // Lưu feedback vào bảng pending_feedbacks
        PendingFeedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
        ]);

        $this->dispatch('success', [
            'title' => 'Thanks!',
            'text' => 'Thank you for your feedback!',
            'icon' => 'success',
        ]);

        // Reset form fields
        $this->reset(['name', 'email', 'content']);
    }

    public function render()
    {
        return view('livewire.user.contact', [
            'TitleImage' => $this->TitleImage,
            'MobilePhone' => $this->MobilePhone,
            'Administration_number' => $this->Administration_number,
            'technical_number' => $this->technical_number,
            'Agency_Address' => $this->Agency_Address,
            'operator_Address' => $this->operator_Address,
            'Contact_Consulting' => $this->Contact_Consulting,
            'Quotes' => $this->Quotes,
        ]);
    }
}
