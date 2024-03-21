<?php

namespace App\Livewire;

use App\Models\PlacementFaculty;
use Livewire\Component;

class PlacementFaculties extends Component
{
    public function render()
    {
        $faculties = PlacementFaculty::get();
        // dd($faculties);
        return view('livewire.placement-faculties',[
            'faculties' => $faculties,
        ]);
    }
}
