<div id="subServiceModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2>{{ __('messages.subService.add_sub_service') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            {{ Form::open(['id'=>'subServiceForm']) }}
            <div class="modal-body scroll-y">
                <div class="alert alert-danger display-none hide" id="editValidationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-lg-4 col-sm-12 mb-5">
                        {{ Form::label('service',__('messages.subservice.service').':', ['class' => 'form-label required mb-3']) }}
                        {{ Form::select('service_id', $service, null,['id'=>'service_id','class' => 'form-select  service ','placeholder'=>__('messages.subService.service'),'required','data-control' =>'select2']) }}
                    </div>
                    <div class="form-group col-lg-4 col-sm-12 mb-5 ">
                        {{ Form::label('price',__('messages.subService.price').':', ['class' => 'form-label mb-3']) }}
                        <div class="input-group">
                            {{ Form::text('price', null, ['id'=>'price','class' => 'form-control ','placeholder'=>__('messages.subService.price'),'readonly','disabled']) }}
                            <a class="input-group-text bg-secondary border-0 text-decoration-none invoice-currency-code" id="autoCode" href="javascript:void(0)"
                               data-toggle="tooltip"
                               data-placement="right" title="Currency Code">
                                {{ getCurrencySymbol() }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4 col-sm-12 mb-5">
                        {{ Form::label('name',__('messages.subService.name').':', ['class' => 'form-label required mb-3']) }}
                        {{ Form::text('name','name',['id'=>'name','class' => 'form-control  ']) }}
                    </div>
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('description',__('messages.subService.description').':', ['class' => 'form-label required mb-3']) }}
                        {{ Form::textarea('description', null, ['id'=>'description','class' => 'form-control ','rows'=>'5','required']) }}
                    </div>
                </div>
                <div class="row">

                <div class="form-group col-sm-12 mb-5">
                    {{ Form::label('image',__('messages.subService.image').':', ['class' => 'form-label required mb-3']) }}
                    <div class="tt-image-drop rounded">
                        <span class="fw-semibold">{{ 'Choose SubService Image' }}</span>
                        <!-- choose media -->
                        <div class="tt-product-thumb show-selected-files mt-3">
                            <div class="avatar avatar-xl cursor-pointer choose-media"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                onclick="showMediaManager(this)" data-selection="single">
                                <input type="hidden" name="image">
                                <div class="no-avatar rounded-circle">
                                    <span><i data-feather="plus"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- choose media -->
                    </div>
                </div>

                </div>
            </div>
            <div class="modal-footer pt-0">
                {{ Form::button(__('messages.common.pay'), ['type' => 'submit','class' => 'btn btn-primary me-2','id' => 'btnPay','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing...", 'data-new-text' => __('messages.common.pay')]) }}
                <button type="button" class="btn btn-secondary btn-active-light-primary me-3"
                        data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
