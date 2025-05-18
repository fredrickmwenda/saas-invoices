<div id="createSubscriptionPlanModal" class="modal fade" role="dialog" aria-labelledby="createSubscriptionPlanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
             <div class="modal-header">
                <h2>{{ __('Add Subscription Plan') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <!-- 'files' = true -->
            {{ Form::open(['id'=>'createSubscriptionPlanForm', 'files' => true]) }}
                <div class="modal-body scroll-y">
                    <div class="alert alert-danger display-none hide" id="validationErrorsBox"></div>
                    <div class="row">
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('name',__('Subscription Plan Name').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('name','name',['id'=>'name','class' => 'form-control  ']) }} 
                            <span class="text-danger" id="name_error"></span>
                            <!-- add description -->
                            {{ Form::label('description',__('Description').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::textarea('description','description',['id'=>'description','class' => 'form-control  ']) }}
                            <span class="text-danger" id="description_error"></span>
                            <!-- SELECT CURRENCY -->
                            {{ Form::label('currency',__('Currency').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::select('currency', getCurrencyOptions(), null, ['id'=>'currency','class' => 'form-control']) }}
                            <!-- add price -->
                            {{ Form::label('price',__('Price').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('price','price',['id'=>'price','class' => 'form-control  ']) }}
                            <span class="text-danger" id="price_error"></span>
                            <!-- add features in a way they can be stored as json -->
                            {{ Form::label('features',__('Features').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::textarea('features','features',['id'=>'features','class' => 'form-control  ']) }}
                            <span class="text-danger" id="features_error"></span>
                            <!-- add duration and duration unit -->
                            
                            {{ Form::label('duration',__('Duration').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('duration','duration',['id'=>'duration','class' => 'form-control  ']) }} 
                            <span class="text-danger" id="duration_error"></span>
                            {{ Form::label('duration_unit',__('Duration Unit').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::select('duration_unit', ['day' => 'Day', 'week' => 'Week', 'month' => 'Month', 'year' => 'Year'], null, ['id'=>'duration_unit','class' => 'form-control  ']) }}
                            <span class="text-danger" id="duration_unit_error"></span>
                            <!-- add status -->
                            {{ Form::label('status',__('Status').':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], null, ['id'=>'status','class' => 'form-control  ']) }}
                            <span class="text-danger" id="status_error"></span>
                        </div>

                    </div>

                </div>
                <div class="modal-footer pt-0">
                {{ Form::button(__('Add Subscription Plan'), ['type' => 'submit','class' => 'btn btn-primary me-2','id' => 'btnAddSubscriptionPlan','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing...", 'data-new-text' => __('messages.common.pay')]) }}
                <button type="button" class="btn btn-secondary btn-active-light-primary me-3"
                        data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
                {{ Form::close() }}
        </div>
    </div>
</div>


