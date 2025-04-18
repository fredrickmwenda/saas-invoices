<div class="row gx-10 mb-5">
    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('Company Name', __('Company').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' =>  __('Company Name'), 'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            <label class="label text-secondary">First Name:</label>
            <div class="form-group position-relative">
                <input type="text" class="form-control text-dark ps-5 h-55" name="first_name" placeholder="Enter First Name" required>
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            <label class="label text-secondary">Last Name:</label>
            <div class="form-group position-relative">
                <input type="text" class="form-control text-dark ps-5 h-55" name="last_name" placeholder="Enter Last Name" required>
                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            <label class="label text-secondary">Email Address:</label>
            <div class="form-group position-relative">
                <input type="email" class="form-control text-dark ps-5 h-55" name="email" placeholder="Enter Email Address" required>
                <i class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
            </div>`
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            <label class="label text-secondary">Phone Number:</label>
            <div class="form-group position-relative">
                {{ Form::tel('contact', getSettingValue('country_code'), ['class' => 'form-control', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
                {{ Form::hidden('region_code', $client->user->region_code ?? null, ['id'=>'prefix_code']) }}
                <span id="valid-msg" class="hide text-success fw-400 fs-small mt-2">✓ {{ __('messages.placeholder.valid_number') }}</span>
                <span id="error-msg" class="hide text-danger fw-400 fs-small mt-2"></span>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('website', __('messages.client.website').':', ['class' => 'form-label mb-3']) }}
            {{ Form::text('website', null,['class' => 'form-control', 'placeholder' =>  __('messages.client.website')]) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('postal_code', __('messages.client.postal_code').':', ['class' => 'form-label  mb-3 required']) }}
            {{ Form::text('postal_code',null, ['class' => 'form-control', 'placeholder' =>  __('messages.client.postal_code'), 'required', 'maxlength' => 6]) }}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-5">
            {{ Form::label('country',__('messages.client.country').':', ['class' => 'form-label mb-3']) }}
            {{ Form::select('country_id', $countries, null, ['id'=>'countryId','class' => 'form-select io-select2 ','placeholder' =>  __('messages.client.country'), 'data-control' => 'select2']) }}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-5">
            {{ Form::label('state', __('messages.client.state').':', ['class' => 'form-label mb-3']) }}
            {{ Form::select('state_id', [], null, ['id'=>'stateId','class' => 'form-select io-select2 ','placeholder' =>  __('messages.client.state'), 'data-control' => 'select2']) }}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-5">
            {{ Form::label('city',__('messages.client.city').':', ['class' => 'form-label mb-3']) }}
            {{ Form::select('city_id', [], null, ['id'=>'cityId','class' => 'form-select io-select2 ','placeholder' =>  __('messages.client.city'), 'data-control' => 'select2']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('address', __('messages.client.address').':', ['class' => 'form-label mb-3']) }}
            {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => __('messages.client.address'),'rows'=>'5']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('notes', __('messages.client.notes').':', ['class' => 'form-label mb-3']) }}
            {{ Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => __('messages.client.notes'),'rows'=>'5']) }}
        </div>
    </div>
    <div class="col-lg-12 mb-7">
        <div class="mb-3" io-image-input="true">      
                <label class="label">Client Image</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input id="file-upload" type="file"id="profile_image" name="profile" class="image-upload d-none" accept="image/*"/>
                        <input type="hidden" name="avatar_remove">
                    </div>
                </div>
        </div>
         

        </div>
        <div class="form-text">{{ __('messages.flash.allowed_file_types_png_jpg_jpeg') }}</div>
    </div>

    <div class="col-lg-12 mb-7">
        <div class="mb-3" io-image-input="true">      
                <label class="label">Company Logo</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input id="file-upload" type="file"id="compamy_logo" name="company_logo" class="image-upload d-none" accept="image/*"/>
                        <input type="hidden" name="avatar_remove">
                    </div>
                </div>
        </div>
         

        </div>
        <div class="form-text">{{ __('messages.flash.allowed_file_types_png_jpg_jpeg') }}</div>
    </div>
</div>
</div>
<div class="float-end d-flex mt-5">
    {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('clients.index') }}" type="reset"
        class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
</div>