<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class DepartmentComponent extends Component
{
    public function render()
    {
        $departments = Edepartments::all();
        return view('livewire.department.department-component', [
            'departments' => $departments
        ])->layout('layout.fe-employe');
    }
}
