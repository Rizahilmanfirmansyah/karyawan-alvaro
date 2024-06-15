<?php

namespace App\Http\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionComponent extends Component
{
    public function render()
    {
        $positions = Position::all();
        return view('livewire.position.position-component', [
            'positions' => $positions
        ])-layout('layout.fe-employe');
    }
}
