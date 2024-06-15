<?php

namespace App\Http\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeComponent extends Component
{
    public function deleteEmploye($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        session()->flash('notif', 'Product Berhasil Didelete');
    }
    
    public function render()
    {
        $employes = Employe::all();
        return view('livewire.employe.employe-component', [
            'employes' => $employes
        ])->layout('layout.fe-employe');
    }
}
