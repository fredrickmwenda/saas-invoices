@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset(getLogoUrl()) }}" class="logo" alt="{{ getAppName() }}">
        @endcomponent
    @endslot

    {{-- Body --}}
    <div>
        <p>New inquiry from {{ $data['first_name'] }} {{ $data['last_name'] }}:</p>
        <p>Details:</p>
        <ul>
            <li>Email: {{ $data['email'] }}</li>
            <li>Phone: {{ $data['phone'] }}</li>
            <li>Message: {{ $data['message'] }}</li>
        </ul>
        
        
    </div>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ getAppName() }}.</h6>
        @endcomponent
    @endslot
@endcomponent
