<?php

namespace App\Http\Livewire\Employe;

use Livewire\Component;
use App\Models\Employe;

class EmployeComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
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
