<div>
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5 class="mb-0">Add New Amenity Type</h5>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form wire:submit.prevent="saveAmenityType">
                <div class="mb-3">
                    <label for="amenity_name" class="form-label">Amenity Name</label>
                    <input type="text" class="form-control" id="amenity_name" wire:model.defer="amenity_name"
                        required>
                    @error('amenity_name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <div class="d-flex align-items-center gap-3">
                        <div class="border rounded d-flex align-items-center justify-content-center p-3 bg-body-secondary"
                            style="width: 60px; height: 60px;">
                            <i class="{{ $selectedIcon }} fs-3 text-primary"></i>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary" wire:click="toggleIconModal">
                            <i class="fa fa-icons me-1"></i>Select Icon
                        </button>
                    </div>
                    @error('selectedIcon')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-phoenix-primary mt-2">
                    <i class="fa fa-save me-2"></i>Save Amenity Type
                </button>
            </form>
        </div>
    </div>

    <!-- Icon Selection Modal -->
    @if ($showIconModal)
        <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h5 class="modal-title">Select Icon</h5>
                        <button type="button" class="btn-close" wire:click="toggleIconModal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-body-tertiary"><i class="ri-search-line"></i></span>
                                <input type="text" class="form-control"
                                    placeholder="Search icons (e.g. 'car', 'food')"
                                    wire:model.live.debounce.300ms="iconSearch" autofocus>
                            </div>
                        </div>

                        @if (count($filteredIcons) > 0)
                            <div class="row g-3">
                                @foreach ($filteredIcons as $icon)
                                    <div class="col-4 col-sm-2 text-center">
                                        <button type="button"
                                            class="btn btn-outline-secondary w-100 p-3 d-flex flex-column align-items-center"
                                            wire:click="selectIcon('{{ $icon }}')"
                                            title="{{ $this->getIconReadableName($icon) }}">
                                            <i class="{{ $icon }} fs-4 mb-2 text-primary"></i>
                                            <small class="text-truncate">{{ $this->getIconReadableName($icon) }}</small>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="ri-search-line fs-1 text-body-tertiary"></i>
                                <h5 class="mt-3">No icons found</h5>
                                <p class="text-muted">Try a different search keyword</p>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="toggleIconModal">
                            <i class="fa fa-times me-1"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
