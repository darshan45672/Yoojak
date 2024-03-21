<?php

namespace App\Livewire;

use App\Models\PlacedStudent;
use Livewire\Component;

class ShowPlacedStudents extends Component
{
    public function render()
    {
        $placedStudents = PlacedStudent::orderBy('id','ASC')->get();
        return view('livewire.show-placed-students',[
            'placedStudents' => $placedStudents
        ]);
    }
}
