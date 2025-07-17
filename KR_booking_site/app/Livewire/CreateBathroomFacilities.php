<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bathroom;

class CreateBathroomFacilities extends Component
{
    public $facilities = '';

    protected $rules = [
        'facilities' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.create-bathroom-facilities');
    }

    public function save()
    {
        $this->validate();

        Bathroom::create([
            'facilities' => $this->facilities,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->reset(['facilities']);
        session()->flash('message', 'Bathroom facilities created successfully!');
    }
}
