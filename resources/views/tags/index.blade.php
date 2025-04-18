@extends('layouts.app')
@section('title')
{{__('Tags')}}


@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column ">
        @include('flash::message')
        <livewire:tag-table />
    </div>
</div>
@include('tags.modal')
@include('tags.edit_modal')


@endsection

@push('js')
<script>
    listenClick(".addTag", (function() {
            $("#addTagModal").appendTo("body").modal("show")
        })),
        listenSubmit("#addTagForm", (
            function(e) {
                e.preventDefault(),
                    formData = new FormData(this);
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ', ' + pair[1]);
                };
                $.ajax({
                    url: route("tags.store"),
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(e) {
                        e.success && ($("#addTagModal").modal("hide"),
                            displaySuccessMessage(e.message),
                            livewire.emit("refreshDatatable"),
                            livewire.emit("resetPageTable"))
                    },
                    error: function(e) {
                        displayErrorMessage(e.responseJSON.message)
                    }
                })
            })),
        listenHiddenBsModal(
            "#addTagModal", (
                function() {
                    resetModalForm("#addTagForm", "#validationErrorsBox")
                }
            )
        ),
        $("#btnAddTag").addClass("disabled");
    $("#error-msg").text("");
    $("#btnAddTag").removeClass("disabled");

</script>
<script> 
listenClick('.tag-delete-btn', function (event) {
    let recordId = $(event.currentTarget).attr('data-id');
    deleteItem(route('tags.delete', recordId))
        // Lang.get('messages.client.client'));
})

</script>
@endpush