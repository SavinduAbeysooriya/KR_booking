<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AmenityType;

class AmenityTable extends Component
{
    use WithPagination;

    public $selectedAmenities = [];
    public $selectAll = false;
    public $perPage = 10;
    public $search = '';

    protected $listeners = ['refreshAmenities' => '$refresh'];

    public function render()
    {
        $amenities = AmenityType::when($this->search, function ($query) {
            return $query->where(function ($q) {
                $q->where('amenity_name', 'like', '%' . $this->search . '%')
                    ->orWhere('icon', 'like', '%' . $this->search . '%');
            });
        })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.amenity-table', [
            'amenities' => $amenities
        ]);
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedAmenities = $this->amenities->pluck('id')->toArray();
        } else {
            $this->selectedAmenities = [];
        }
    }

    public function updatedSelectedAmenities()
    {
        $this->selectAll = false;
    }

    public function deleteSelected()
    {
        AmenityType::whereIn('id', $this->selectedAmenities)->delete();
        $this->selectedAmenities = [];
        $this->selectAll = false;
        $this->dispatch('show-toast', type: 'success', message: 'Selected amenities deleted successfully');
        $this->dispatch('refreshAmenities');
    }

    public function deleteSingle($id)
    {
        AmenityType::findOrFail($id)->delete();
        $this->dispatch('show-toast', type: 'success', message: 'Amenity deleted successfully');
        $this->dispatch('refreshAmenities');
    }

    public function resetFilters()
    {
        $this->reset(['search', 'selectedAmenities', 'selectAll']);
        $this->resetPage();
    }
}
