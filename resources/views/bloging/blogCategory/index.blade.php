@extends('layouts.app')
@section('title')
    {{ __('messages.categories') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <livewire:blog-category-table/>
        </div>
    </div>
    @include('bloging.blogCategory.create_modal')
    @include('bloging.blogCategory.edit_modal')
@endsection

@push('js')
<script> 
listenClick(".addBlogCategory",(function(){$("#addBlogCategoryModal").appendTo("body").modal("show")})),
listenSubmit("#addBlogCategoryForm",(
    
    function(e){
        e.preventDefault(),
        formData = new FormData(this);
        for (var pair of formData.entries()) {
        console.log(pair[0]+ ', '+ pair[1]); 
    }
      ;
        $.ajax({
            url:route("blogs.blogCategories.store"),
            type:"POST",
            data:formData,
            processData:false,
            contentType:false, 
            success:function(e){
                e.success&&($("#addBlogCategoryModal").modal("hide"),
                displaySuccessMessage(e.message),
                livewire.emit("refreshDatatable"),
                livewire.emit("resetPageTable"))
            },
            error:function(e){
                displayErrorMessage(e.responseJSON.message)
            }
        })
    })
),
listenHiddenBsModal(
    "#addBlogCategoryModal",(
        function(){
            resetModalForm("#addBlogCategoryForm","#validationErrorsBox")
        }
    )
),
$("#btnAddService").addClass("disabled");
$("#error-msg").text("");
$("#btnAddService").removeClass("disabled");
</script>


<script> 
listenClick('.blog-category-delete-btn', function (event) {
    let recordId = $(event.currentTarget).attr('data-id');
    deleteItem(route('tags.delete', recordId))
        // Lang.get('messages.client.client'));
})

</script>


@endpush