<?php

namespace App\Http\Livewire\Employe;

use Livewire\Component;

class EmployeComponent extends Component
{
    public function render()
    {
        return view('livewire.employe.employe-component')->layout('layout.FE-admin');
    }
}
