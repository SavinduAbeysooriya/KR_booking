<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bathroom;

class BathroomFacilitiesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $listeners = ['refreshFacilities' => '$refresh'];

    public function render()
    {
        return view('livewire.bathroom-facilities-table', [
            'facilities' => Bathroom::when($this->search, function ($query) {
                $query->where('facilities', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage)
        ]);
    }

    public function deleteFacility($id)
    {
        $facility = Bathroom::findOrFail($id);
        $facility->delete();

        $this->dispatch('show-toast', [
            'type' => 'success',
            'message' => 'Facility deleted successfully!'
        ]);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}
