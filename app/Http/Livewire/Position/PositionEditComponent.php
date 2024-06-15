<?php

namespace App\Http\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionEditComponent extends Component
{
    public $nama;
    public $position_id;

    public function mount($position_id)
    {
        $department = Department::where('id', $position_id)->first();
        $this->nama = $deparment->nama;
        $this->department_id = $deparment->id;
        $department->save();
    }

    public function addPosition()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $position = Position::find($this->position_id);
        $position->nama = $this->nama;
        $position->save();

        session()->flash('notif', 'Kategori Position Berhasil Diupdate');
        return redirect()->route('employe.all');


    }

    public function render()
    {
        return view('livewire.position.position-edit-component')-layout('layout.fe-employe');
    }
}
