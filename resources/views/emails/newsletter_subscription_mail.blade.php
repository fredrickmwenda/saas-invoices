@component('mail::message')
# Welcome to Our Newsletter

You've just subscribed to our newsletter.Y'll be receiving new Tech information as soon as they're updated. To verify your email, click the button below:

@component('mail::button', ['url' => $verificationUrl])
Verify Email
@endcomponent

Thanks,
@slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ getAppName() }}.</h6>
        @endcomponent
    @endslot
@endcomponent
