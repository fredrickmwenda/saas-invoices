<button 
    class="btn btn-sm {{ $isActive ? 'btn-success' : 'btn-danger' }}" 
    wire:click="toggleActive({{ $id }})">
    {{ $isActive ? __('Active') : __('Inactive') }}
</button>