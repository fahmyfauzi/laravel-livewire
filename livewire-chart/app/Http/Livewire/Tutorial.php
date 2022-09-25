<?php

namespace App\Http\Livewire;

use App\Models\Tutorial as ModelsTutorial;
use Livewire\Component;

class Tutorial extends Component
{
    public  $products;
    protected $listeners = ['ubahData' => 'changeData'];
    public function mount()
    {
        $products = ModelsTutorial::latest()->limit(10)->get();
        foreach ($products as $item) {
            $data['label'][] = $item->created_at->format('H:i:s');
            $data['data'][] = (int)$item->income;
        }
        $this->products = json_encode($data);
        // dd($this->products);
    }
    public function render()
    {
        return view('livewire.tutorial');
    }

    public function changeData()
    {
        $products = ModelsTutorial::latest()->limit(10)->get();
        foreach ($products as $item) {
            $data['label'][] = $item->created_at->format('H:i:s');
            $data['data'][] = (int)$item->income;
        }
        $this->products = json_encode($data);
        $this->emit('berhasilUpdate', ['data' => $this->products]);
    }
}
