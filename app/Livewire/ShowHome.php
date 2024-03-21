<?php

namespace App\Livewire;

use App\Models\AboutUniversity;
use App\Models\PlacedStudent;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $placedStudents = PlacedStudent::orderBy('id','ASC')->where('status',1)->get();
        return view('livewire.show-home',[
            'placedStudents' => $placedStudents,
        ]);
    }
}
