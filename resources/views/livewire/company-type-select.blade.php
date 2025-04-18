<div class="form-group col-sm-4 mb-5">
    <label class="label text-dark fs-6">Company Type</label>
    <!-- Select box for company types -->
    <select id="companyTypeSelect" wire:model="companyType" class="form-control">
        <option value="" disabled>Select Company Type</option>
        @foreach($companyTypes as $type)
        <option value="{{ $type['value'] }}" {{ $companyType == $type['value'] ? 'selected' : '' }}>
            {{ $type['label'] }}
        </option>
        @endforeach
    </select>
</div>