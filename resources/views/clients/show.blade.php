@extends('layouts.app')
@section('title')
    {{ __('messages.client.client_details') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">@yield('title')</h1>
            <div class="text-end mt-4 mt-md-0">
                <a href="{{route('clients.edit', $client->id)}}"
                   class="btn btn-primary me-4">{{__('messages.common.edit')}}</a>
                <a href="{{route('clients.index')}}"
                   class="btn btn-outline-primary">{{ __('messages.common.back') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
@php $styleCss = 'style'; @endphp
    <div class="container-fluid">
        @include('flash::message')
        <div class="d-flex flex-column">
            @include('clients.show_fields')
            @include('clients.edit_modal')
        </div>
    </div>
@endsection
@push('js')
<script> 
listenClick(".editClientBtn",(function(){$("#editClientModal").appendTo("body").modal("show")})),
// listenSubmit("#addBlogCategoryForm",(
    
//     function(e){
//         e.preventDefault(),
//         formData = new FormData(this);
//         for (var pair of formData.entries()) {
//         console.log(pair[0]+ ', '+ pair[1]); 
//     }
//       ;
//         $.ajax({
//             url:route("blogs.blogCategories.store"),
//             type:"POST",
//             data:formData,
//             processData:false,
//             contentType:false, 
//             success:function(e){
//                 e.success&&($("#addBlogCategoryModal").modal("hide"),
//                 displaySuccessMessage(e.message),
//                 livewire.emit("refreshDatatable"),
//                 livewire.emit("resetPageTable"))
//             },
//             error:function(e){
//                 displayErrorMessage(e.responseJSON.message)
//             }
//         })
//     })
// ),
listenHiddenBsModal(
    "#editClientModal",(
        function(){
            resetModalForm("#editClientForm","#validationErrorsBox")
        }
    )
)
// $("#btnAddService").addClass("disabled");
// $("#error-msg").text("");
// $("#btnAddService").removeClass("disabled");
</script>

<!-- 
<script> 
listenClick('.blog-category-delete-btn', function (event) {
    let recordId = $(event.currentTarget).attr('data-id');
    deleteItem(route('tags.delete', recordId))
        // Lang.get('messages.client.client'));
})

</script> -->


@endpush
