<div class="d-flex align-items-center">
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-2">
        <a href="{{route('clients.show', $row->id)}}">
            <div class="image image-circle image-mini me-2">
                <img src="{{$row->profile_image}}" alt="" class="user-img" width="50px" height="50px">
            </div>
        </a>
    </div>
    <div class="d-flex flex-column">
        <a href="{{route('clients.show', $row->id)}}" class="mb-1 text-decoration-none">{{$row->full_name}}</a>
        <span>{{$row->email}}</span>
    </div>
</div>
