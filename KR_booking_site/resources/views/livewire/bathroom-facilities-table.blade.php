<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">All Bathroom Facilities</h5>
        <div class="col-auto">
            <input type="text" class="form-control form-control-sm" wire:model.live.debounce.300ms="search"
                placeholder="Search facilities...">
        </div>
    </div>

    <div class="card-body pb-0">
        <div class="table-responsive">
            <table class="table table-sm table-hover border-top border-translucent fs-9 mb-0">
                <thead class="bg-body-tertiary">
                    <tr>
                        <th class="align-middle">Facilities</th>
                        <th class="align-middle">Created At</th>
                        <th class="text-end align-middle pe-3">Actions</th>
                    </tr>
                </thead>
                <tbody wire:poll.5s>
                    @forelse($facilities as $facility)
                        <tr wire:key="facility-{{ $facility->id }}" class="align-middle">
                            <td>{{ $facility->facilities }}</td>
                            <td>{{ $facility->created_at->diffForHumans() }}</td>
                            <td class="text-end pe-3">
                                <button class="btn btn-sm btn-danger" wire:click="deleteFacility({{ $facility->id }})"
                                    wire:confirm="Are you sure you want to delete this facility?">
                                    <i class="fa fa-trash me-1"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-body-tertiary">No facilities found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center pt-3">
            <p class="mb-0 fs-9">
                @if ($facilities->total() > 0)
                    Showing {{ $facilities->firstItem() }} to {{ $facilities->lastItem() }} of
                    {{ $facilities->total() }} facilities
                @endif
            </p>
            <div class="d-flex">
                <button class="btn btn-sm btn-primary me-2 {{ $facilities->onFirstPage() ? 'disabled' : '' }}"
                    type="button" wire:click="previousPage" {{ $facilities->onFirstPage() ? 'disabled' : '' }}>
                    <i class="fa fa-chevron-left me-1"></i> Previous
                </button>
                <button class="btn btn-sm btn-primary {{ !$facilities->hasMorePages() ? 'disabled' : '' }}"
                    type="button" wire:click="nextPage" {{ !$facilities->hasMorePages() ? 'disabled' : '' }}>
                    Next <i class="fa fa-chevron-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>
    <br>
</div>
