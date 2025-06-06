<a type="button" class="btn btn-primary" href="{{ route('users.create')}}">
   @if(Auth::user()->hasrole('admin'))
    {{__('messages.add_admin')}}
    @elseif(Auth::user()->hasrole('client'))
    {{__('messages.add_admin')}}
    @endif

</a>

