<?php

namespace App\Livewire;

use App\Models\AboutUniversity;
use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        $aboutUniversity = AboutUniversity::orderBy('id','ASC')->get();
        return view('livewire.about-us',[
            'aboutUniversity' => $aboutUniversity,
        ]);
    }
}
