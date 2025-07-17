<div class="card shadow-sm border-0">
    <div class="card-body pb-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="col-auto">
                <input type="text" class="form-control form-control-sm" wire:model.live.debounce.300ms="search"
                    placeholder="Search amenities...">
            </div>

        </div>

        <div class="table-responsive">
            <table class="table table-sm table-hover border-top border-translucent fs-9 mb-0">
                <thead class="bg-body-tertiary">
                    <tr>
                        <th class="align-middle ps-3">Icon</th>
                        <th class="align-middle">Amenity Name</th>
                        <th class="text-end align-middle pe-3">Actions</th>
                    </tr>
                </thead>
                <tbody wire:poll.5s>
                    @forelse($amenities as $amenity)
                        <tr wire:key="amenity-{{ $amenity->id }}" class="align-middle">
                            <td class="ps-3">
                                <i class="{{ $amenity->icon }} fs-2 text-primary"></i>
                            </td>
                            <td>{{ $amenity->amenity_name }}</td>
                            <td class="text-end pe-3">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-danger " type="button" <button
                                        class="dropdown-item text-danger" wire:click="deleteSingle({{ $amenity->id }})"
                                        wire:confirm="Are you sure you want to delete this amenity?">
                                        <i class="fa fa-trash me-2"></i>Delete
                                    </button>
                                    </button>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-body-tertiary">No amenities found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center pt-3">
            <p class="mb-0 fs-9">
                @if ($amenities->total() > 0)
                    Showing {{ $amenities->firstItem() }} to {{ $amenities->lastItem() }} of {{ $amenities->total() }}
                    amenities
                @endif
            </p>
            <div class="d-flex">
                <button class="btn btn-sm btn-primary me-2 {{ $amenities->onFirstPage() ? 'disabled' : '' }}"
                    type="button" wire:click="previousPage" {{ $amenities->onFirstPage() ? 'disabled' : '' }}>
                    <i class="fa fa-chevron-left me-1"></i> Previous
                </button>
                <button class="btn btn-sm btn-primary {{ !$amenities->hasMorePages() ? 'disabled' : '' }}"
                    type="button" wire:click="nextPage" {{ !$amenities->hasMorePages() ? 'disabled' : '' }}>
                    Next <i class="fa fa-chevron-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>
    <br>
</div>
