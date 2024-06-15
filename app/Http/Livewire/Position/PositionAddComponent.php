<?php

namespace App\Http\Livewire\Position;

use Livewire\Component;

class PositionAddComponent extends Component
{
    public $nama;

    public function addPosition()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $deparment = new Department();
        $department->nama = $this->nama;
        $deparment->save();

        session()->flash('notif', 'Kategori Position Berhasil Ditambahkan');
        return redirect()->route('employe.all');
    }

    public function render()
    {
        return view('livewire.position.position-add-component')-layout('layout.fe-employe');
    }
}
