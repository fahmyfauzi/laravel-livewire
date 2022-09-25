<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public function render()
    {
        return view('livewire.tutorial');
    }

    public function showAlert()
    {
        $this->emit('success', ['pesan' => 'Berhasil Input Data']);
    }
}
