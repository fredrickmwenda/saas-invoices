<div id="addTagModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2>{{ __('Add Tag') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <!-- 'files' = true -->
            {{ Form::open(['id'=>'addTagForm', 'files' => true]) }}
                <div class="modal-body scroll-y">
                    <div class="alert alert-danger display-none hide" id="editValidationErrorsBox"></div>
                    <div class="row">
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('name',__('Tag Name').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('name','name',['id'=>'name','class' => 'form-control  ']) }}
                        </div>

                    </div>

                </div>
                <div class="modal-footer pt-0">
                    {{ Form::button(__('Add Tag'), ['type' => 'submit','class' => 'btn btn-primary me-2','id' => 'btnAddTag','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing...", 'data-new-text' => __('messages.common.pay')]) }}
                    <button type="button" class="btn btn-secondary btn-active-light-primary me-3"
                            data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>


 