<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Employe;

class DepartmentAddComponent extends Component
{
    public $nama;

    public function addDepartment()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $deparment = new Department();
        $department->nama = $this->nama;
        $deparment->save();

        session()->flash('notif', 'Kategori Department Berhasil Ditambahkan');
        return redirect()->route('employe.all');
    }


    public function render()
    {
        return view('livewire.department.department-add-component')-layout('layout.fe-employe');
    }
}
