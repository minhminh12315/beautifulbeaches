<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Images;
use App\Models\Texts;

class About extends Component
{
    public $section_1;
    public $section_2;
    public $section_3;
    public $section_4;

    public $AboutTilte;
    public $textSection_1_1;
    public $textSection_1_2;
    public $textSection_1_3;
    public $textSection_1_4;
    public $textSection_2_1;
    public $textSection_2_2;
    public $textSection_3_1;
    public $textSection_3_2;
    public function mount()
    {
        // Truy vấn lấy tất cả dữ liệu từ bảng images
        $this->section_1 = Images::where('type', 'About')
        ->where('title', 'section_1')
        ->first();
       // Truy vấn tất cả các đường dẫn (path) của ảnh có type là 'About' và title là 'section_2'
       $this->section_2 = Images::where('type', 'About')
       ->where('title', 'section_2')
       ->pluck('path')
       ->toArray(); // Chuyển kết quả thành mảng
       $this->section_3 = Images::where('type','About')
       ->where('title','section_3')
       ->pluck('path')
       ->toArray();
       $this->section_4 = Images::where('type','About')
       ->where('title','section_4')
       ->pluck('path')
       ->toArray();
       $this->AboutTilte = Texts::where('type','About_Title')
       ->first();
       $this->textSection_1_1 = Texts::where('type','About_section_1.1')
       ->first();
       $this->textSection_1_2 = Texts::where('type','About_section_1.2')
       ->first();
       $this->textSection_1_3 = Texts::where('type','About_section_1.3')
       ->first();
       $this->textSection_1_4 = Texts::where('type','About_section_1.4')
       ->first();
       $this->textSection_2_1 = Texts::where('type','About_section_2.1')
       ->first();
       $this->textSection_2_2 = Texts::where('type','About_section_2.2')
       ->first();

       $this->textSection_3_1 = Texts::where('type','About_section_3.1')
       ->first();
       $this->textSection_3_2 = Texts::where('type','About_section_3.2')
       ->first();

    }
    public function render()
{
    return view('livewire.user.about', [
        'section_1' => $this->section_1,
        'section_2' => $this->section_2,
        'section_3' => $this->section_3,
        'section_4' => $this->section_4,
        'AboutTilte' => $this->AboutTilte,
        'textSection_1_1' => $this->textSection_1_1,
        'textSection_1_2' => $this->textSection_1_2,
        'textSection_1_3' => $this->textSection_1_3,
        'textSection_1_4' => $this->textSection_1_4,
        'textSection_2_1' => $this->textSection_2_1,
        'textSection_2_2' => $this->textSection_2_2,
        'textSection_3_1' => $this->textSection_3_1,
        'textSection_3_2' => $this->textSection_3_2,
    ]);
}

}
