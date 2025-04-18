
@extends('layouts.app')
@section('title')
    {{__('messages.services')}}


@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <livewire:service-table/>
        </div>
    </div>
    @include('services.service.service_modal')
    @include('services.service.service_edit_modal')
    {{ Form::hidden('currency', getCurrencySymbol(),['id' => 'currency']) }}
    
@endsection

@push('js')
<script> 
listenClick(".addService",(function(){$("#addServiceModal").appendTo("body").modal("show")})),
listenSubmit("#addServiceForm",(
    function(e){
        e.preventDefault(),
        formData = new FormData(this);
        for (var pair of formData.entries()) {
        console.log(pair[0]+ ', '+ pair[1]); 
    }
      ;
        $.ajax({
            url:route("services.store"),
            type:"POST",
            data:formData,
            processData:false,
            contentType:false, 
            success:function(e){
                e.success&&($("#addServiceModal").modal("hide"),
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
    "#addServiceModal",(
        function(){
            resetModalForm("#addServiceForm","#validationErrorsBox")
        }
    )
),
$("#btnAddService").addClass("disabled");
$("#error-msg").text("");
$("#btnAddService").removeClass("disabled");
</script>

<!-- <script src="{{ asset('backend/js/uppy.min.js') }}"></script> -->

<!-- <script type="module">
    var TT = TT || {};


    TT.baseUrl = '{{ \Request::root() }}';
    import {Uppy, Dashboard, ImageEditor, DropTarget, XHRUpload} from "{{ asset('backend/js/uppy.min.js') }}"
    var uppy = new Uppy({
            restrictions: { 
                allowedFileTypes: TT.allowedFileTypes, 
            }
        })
        .use(Dashboard, {
            inline: true,
            target: '.uppy-drag-drop-area',
            proudlyDisplayPoweredByUppy: false,
            hidePauseResumeButton: true,
            width: '100%',
            height:'auto'
        })
        .use(ImageEditor, { target: Dashboard })
        // Allow dropping files on any element or the whole document
        .use(DropTarget, { 
            target: 'DashboardContainer'
        })
        .use(XHRUpload, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            endpoint: TT.baseUrl+'/media-manager/add-files',
            fieldName: "media_file",
            formData: true,
        })

    uppy.on('complete', (result) => {
        getMediaFiles();
    })


</script> -->

<!-- <script>
    "use strict";

   
    var TT = TT || {};
    TT.getMediaType = 'all';
    TT.getMediaSearch = '';
    TT.allowedFileTypes = [
        ".png",
        ".svg",
        ".gif",
        ".jpg",
        ".jpeg",
        ".webp"
    ];
    TT.uploadQty = "single";
    TT.selectedFiles = null;
    TT.nextPageUrl = null;

    async function getMediaFiles(getMediaType = TT.getMediaType, getMediaSearch = TT.getMediaSearch, search = false) {

        let url = '{{ route('uppy.index') }}';

        if (search == false) {
            $('.recent-uploads').empty();
        }

        $('.previous-uploads').empty();

      
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type: "GET",
            data: {
                type: getMediaType,
                searchKey: search ? getMediaSearch : '',
            },
            url: url,
            success: function(data) {

                if (search == false) {
                    $('.recent-uploads').append(data.recentFiles);
                }
                $('.previous-uploads').append(data.mediaFiles);


                TT.nextPageUrl = data.mediaQuery.next_page_url;
                if (data.mediaQuery.next_page_url == null) {
                    $('.load-more-media').addClass('d-none')
                } else {
                    $('.load-more-media').removeClass('d-none')
                }

             
                getSelectedFilesCount();

               
                setTimeout(() => {
                    activeSelectedFiles();
                }, 400);
               
            }
        });
    }

        
    function getSelectedFilesCount() {
        //  
    }


    function activeSelectedFiles() {
        if (TT.selectedFiles != null) {
            TT.selectedFiles
                .split(",").forEach(selectedImage => {
                    $('[data-active-file-id=' + selectedImage + ']').addClass('active-image');
                });
        }
    }



 
   
    async function showMediaManager(thisWrapper) {
       
        let selectedFilesInput = $(thisWrapper).find('input');
        TT.uploadQty = $(thisWrapper).data("selection");

        TT.selectedFiles = selectedFilesInput.val() != '' ? selectedFilesInput.val() : null;
        TT.selectedFilesInput = selectedFilesInput;

        TT.showSelectedFilesDiv = $(thisWrapper).parent();
   
        await getMediaFiles();
    }

    function hideMediaManager() {}

</script> -->

@endpush