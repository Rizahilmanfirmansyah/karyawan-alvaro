<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;

class DepartmentEditComponent extends Component
{
    public $nama;
    public $department_id;

    public function mount($department_id)
    {
        $department = Department::where('id', $department_id)->first();
        $this->nama = $deparment->nama;
        $this->department_id = $deparment->id;
        $department->save();
    }

    public function addDepartment()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $deparment = Department::find($this->department_id);
        $department->nama = $this->nama;
        $deparment->save();

        session()->flash('notif', 'Kategori Department Berhasil Diupdate');
        return redirect()->route('employe.all');
    }

    public function render()
    {
        return view('livewire.department.department-edit-component')-layout('layout.fe-employe');
    }
}
