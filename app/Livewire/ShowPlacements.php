<?php

namespace App\Livewire;

use App\Models\Placement;
use Livewire\Component;

class ShowPlacements extends Component
{
    public function render()
    {
        $placements = Placement::orderBy('id','DESC')->where('status',1)->get();
        return view('livewire.show-placements',[
            'placements' => $placements
        ]);
    }
}
