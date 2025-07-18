<div class="card shadow-sm border-0">
    <div class="card-header">
        <h5 class="mb-0">Create New Bathroom Facility</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="mb-3">
                <label for="facilitiesInput" class="form-label">Bathroom Facilities</label>
                <textarea
                    id="facilitiesInput"
                    class="form-control"
                    rows="3"
                    wire:model.defer="facilities"
                    placeholder="Enter bathroom facilities (e.g., Shower, Toilet, Sink...)"
                ></textarea>
                @error('facilities')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-phoenix-primary">
                <i class="fa fa-save me-1"></i> Save Facilities
            </button>

            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </form>
    </div>
</div>
