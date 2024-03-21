<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
        $testimonials = Testimonial::where('status', 1)->get();
        return view('livewire.testimonials',[
            'testimonials' => $testimonials
        ]);
    }
}
