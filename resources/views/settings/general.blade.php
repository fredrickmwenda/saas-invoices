@extends('settings.edit')

@section('title')
{{ __('messages.settings') }}
@endsection

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/invoice-template.css') }}">
@endsection

@push('css')
<style>
    .custom-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .custom-switch-input {
        width: 3.625em;
        height: 1.563em;
        margin-top: -.0315em;
        vertical-align: top;
        background-color: #ced4da;
        background-repeat: no-repeat;
        border-radius: 2.625em;
        transition: background-position .15s ease-in-out;
    }

    .custom-switch-label {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .custom-switch-label::before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    /* If the checkbox is checked, change the background and move the slider */
    .custom-switch-input:checked+.custom-switch-label {
        background-color: #4CAF50;
    }

    .custom-switch-input:checked+.custom-switch-label::before {
        transform: translateX(26px);
    }
</style>
@endpush

@section('section')
@php $styleCss = 'style'; @endphp
{{ Form::open(['route' => ['settings.update'], 'method' => 'post', 'files' => true, 'id' => 'createSetting']) }}

<div class="card bg-white border-0 rounded-3 mb-4">
    <div class="card-body p-4">
        <div class="alert alert-danger display-none hide" id="validationErrorsBox"></div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4" id="settingsTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                    {{ __('General Settings') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="currency-tab" data-bs-toggle="tab" href="#currency" role="tab" aria-controls="currency" aria-selected="false">
                    {{ __('Currency Settings') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="invoice-tab" data-bs-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">
                    {{ __('Invoice Settings') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="invoiceTemplate-tab" data-bs-toggle="tab" href="#invoiceTemplate" role="tab" aria-controls="invoiceTemplate" aria-selected="false">
                    {{ __('Invoice Template') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="terms-tab" data-bs-toggle="tab" href="#terms" role="tab" aria-controls="terms" aria-selected="false">
                    {{ __('Terms and conditions') }}
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- General Settings Tab -->
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="alert alert-danger display-none hide" id="validationErrorsBox"></div>

                <div class="row">
                    <div class="form-group col-sm-4 mb-5">
                        {{ Form::label('app_name', __('messages.setting.app_name') . ':', ['class' => 'form-label required fs-6  mb-3']) }}
                        {{ Form::text('app_name', $settings['app_name'], ['class' => 'form-control ', 'required', 'id' => 'app_name']) }}
                    </div>
                    <div class="form-group col-sm-4 mb-5">
                        {{ Form::label('company_name', __('messages.setting.company_name') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        {{ Form::text('company_name', $settings['company_name'], ['class' => 'form-control ', 'required', 'id' => 'company_name']) }}
                    </div>
                    @livewire('company-type-select')
                    <div class="form-group col-sm-4 mb-5 country-code">
                        {{ Form::label('country_phone', __('messages.setting.country_code') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        {{ Form::tel('country_phone', $settings['country_code'], ['class' => 'form-control width-0', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'id' => 'countryPhone']) }}
                        {{ Form::hidden('country_code', null, ['id' => 'countryCode']) }}
                        {{ Form::hidden('default_country_code', str_replace('+', '', $settings['country_code']), ['id' => 'defaultCountryCode']) }}
                    </div>
                    <div class="form-group col-sm-4 mb-5">
                        {{ Form::label('company_phone', __('messages.setting.company_phone') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        <br>
                        {{ Form::tel('company_phone', $settings['company_phone'] ?? getSettingValue('country_code'), ['class' => 'form-control ', 'id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'required']) }}
                        {{ Form::hidden('prefix_code', null, ['id' => 'prefix_code']) }}
                        <span id="valid-msg" class="hide">✓ &nbsp; {{ __('messages.placeholder.valid_number') }}</span>
                        <span id="error-msg" class="hide"></span>
                    </div>
                    <div class="form-group col-sm-4 mb-5">
                        {{ Form::label('date_format', __('messages.setting.date_format') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        {{ Form::select('date_format', $dateFormats, $settings['date_format'], ['class' => 'form-select ', 'id' => 'dateFormat']) }}
                    </div>
                    <div class="form-group col-sm-4 mb-5">
                        {{ Form::label('timezone', __('messages.setting.timezone') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        {{ Form::select('time_zone', $timezones, getCurrentTimeZone(), ['class' => 'form-select ', 'id' => 'timeZone']) }}
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('payment_auto_approved', __('messages.setting.manual_payment_approval') . ':', ['class' => 'form-label text-dark fs-6 required mb-3']) }}
                        <div class="custom-switch mt-3 width-fit-content">
                            <input class="custom-switch-input currencyAfterAmount" type="checkbox"
                                name="payment_auto_approved"
                                id="paymentAutoApproved" {{ isset($settings['payment_auto_approved']) && $settings['payment_auto_approved'] == \App\Models\Setting::PAYMENT_AUTO_APPROVED ? 'checked' : '' }}>
                            <span class="form-check-label text-gray-600"
                                for="currencyAfterAmount">{{ __('messages.setting.auto_approve') }}</span>&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('time_format', __('messages.setting.time_format') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        <div class="radio-button-group">
                            <div class="btn-group btn-group-toggle m-0" data-toggle="buttons">
                                <input type="radio" name="time_format" id="time_format-0"
                                    value="0" {{ isset($settings) ? ($settings['time_format'] == 0 ? 'checked' : '') : 'checked' }}>
                                <label for="time_format-0" class="me-2" role="button">12 Hour</label>

                                <input type="radio" name="time_format" id="time_format-1"
                                    value="1" {{ isset($settings) ? ($settings['time_format'] == 0 ? '' : 'checked') : '' }}>
                                <label for="time_format-1" role="button">24 Hour</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('mail_notifications', __('messages.setting.mail_notifications') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                        <div class="radio-button-group">
                            <div class="btn-group btn-group-toggle m-0" data-toggle="buttons">
                                <input type="radio" name="mail_notification" id="mail_notification-0"
                                    value="1" {{ isset($settings) ? ($settings['mail_notification'] == 0 ? '' : 'checked') : '' }}>
                                <label for="mail_notification-0" class="me-2 " role="button">Yes</label>

                                <input type="radio" name="mail_notification" id="mail_notification-1"
                                    value="0" {{ isset($settings) ? ($settings['mail_notification'] == 0 ? 'checked' : '') : 'checked' }}>
                                <label for="mail_notification-1" role="button">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('clear_cache', __('messages.clear_cache') . ':', ['class' => 'form-label text-dark fs-6  mb-3']) }}
                        <div>
                            <a class="btn btn-primary" data-turbo="false" aria-current="page"
                                href="{{ route('clear-cache') }}">
                                <span>{{ __('messages.clear_cache') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-sm-2 mb-5">
                        {{ Form::label('country', __('messages.common.country') . ':', ['class' => 'form-label text-dark fs-6  mb-3']) }}
                        {{ Form::text('country', $settings['country'], ['class' => 'form-control ', 'id' => 'country']) }}
                    </div>
                    <div class="form-group col-sm-2 mb-5">
                        {{ Form::label('state', __('messages.common.state') . ':', ['class' => 'form-label fs-6  mb-3']) }}
                        {{ Form::text('state', $settings['state'], ['class' => 'form-control ', 'id' => 'state']) }}
                    </div>
                    <div class="form-group col-sm-2 mb-5">
                        {{ Form::label('city', __('messages.common.city') . ':', ['class' => 'form-label text-dark fs-6  mb-3']) }}
                        {{ Form::text('city', $settings['city'], ['class' => 'form-control ', 'id' => 'city']) }}
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('zipcode', __('messages.common.zipcode') . ':', ['class' => 'form-label text-dark fs-6  mb-3']) }}
                        {{ Form::text('zipcode', $settings['zipcode'], ['class' => 'form-control ', 'id' => 'zipcode']) }}
                    </div>
                    <div class="form-group col-sm-3 mb-5">
                        {{ Form::label('fax_no', __('messages.invoice.fax_no') . ':', ['class' => 'form-label text-dark fs-6  mb-3']) }}
                        {{ Form::text('fax_no', $settings['fax_no'], ['class' => 'form-control ', 'id' => 'faxNumber']) }}
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6 mb-5 mt-2 d-flex align-items-center gap-2">
                            {{ Form::label('show_additional_address_in_invoice', __('messages.setting.show_additional_address') . ':', ['class' => 'form-label text-dark fs-6 mb-3']) }}

                            <div class="custom-switch mt-3 width-fit-content">
                                <input class="custom-switch-input currencyAfterAmount" type="checkbox"
                                    name="show_additional_address_in_invoice"
                                    id="ShowAdditionalAddress" {{ isset($settings['show_additional_address_in_invoice']) && $settings['show_additional_address_in_invoice'] == '1' ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('company_address', __('messages.setting.company_address') . ':', ['class' => 'form-label required text-dark fs-6  mb-3']) }}
                            {{ Form::textarea('company_address', $settings['company_address'], ['class' => 'form-control ', 'rows' => 5, 'cols' => 5, 'required', 'id' => 'companyAddress']) }}
                        </div>

                        <div class="form-group col-sm-6 mb-5">
                            <div class="mb-3" io-image-input="true">
                                <label for="appLogoPreview"
                                    class="label text-dark fs-18 required">{{ __('messages.setting.app_logo') . ':' }}</label>
                                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                    <div class="product-upload">
                                        <!-- Show the image if it exists, otherwise show the placeholder -->
                                        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                            <div class="product-upload">
                                                <!-- Display the logo if it exists, otherwise show the placeholder -->
                                                <div id="appLogoPreview" class="mb-3">
                                                    @if($settings['app_logo'] != null)
                                                    <!-- Display the current logo with an option to change it -->
                                                    <img src="{{ asset($settings['app_logo']) }}" alt="App Logo" class="img-fluid" id="appLogoImage" style="max-height: 200px;">
                                                    @else
                                                    <!-- Placeholder when no logo is available -->
                                                    <label for="file-upload" class="file-upload mb-0">
                                                        <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                                                        <span class="d-block text-body fs-14">Drag and drop an image or <span class="text-primary text-decoration-underline">Browse</span></span>
                                                    </label>
                                                    @endif
                                                </div>

                                                <!-- File input for changing or uploading the logo -->
                                                <input id="file-upload" type="file" name="app_logo" class="image-upload d-none" accept="image/*" onchange="previewImage(event)">

                                                <!-- Label for uploading new image -->
                                                <label for="file-upload" class="btn btn-primary mt-2">
                                                    <i class="fa-solid fa-pen"></i> Change Logo
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Hidden file input for uploading new image -->
                                        <input id="file-upload" type="file" name="app_logo" class="image-upload d-none" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-group col-sm-6 mb-5">
                            <div class="mb-3" io-image-input="true">
                                <label for="faviconPreview" class="label text-dark fs-18 required"> {{ __('messages.setting.fav_icon') . ':' }}</label>
                                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                    <div class="product-upload">
                                        <!-- Show the image if it exists, otherwise show the placeholder -->
                                        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                            <div class="product-upload">
                                                <!-- Display the logo if it exists, otherwise show the placeholder -->
                                                <div id="faviconPreview" class="mb-3">
                                                    @if($settings['favicon_icon'] != null)
                                                    <!-- Display the current logo with an option to change it -->
                                                    <img src="{{ asset($settings['favicon_icon']) }}" alt="App Favicon" class="img-fluid" id="appFavicon" style="max-height: 200px;">
                                                    @else
                                                    <!-- Placeholder when no logo is available -->
                                                    <label for="file-upload" class="file-upload mb-0">
                                                        <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                                                        <span class="d-block text-body fs-14">Drag and drop an image or <span class="text-primary text-decoration-underline">Browse</span></span>
                                                    </label>
                                                    @endif
                                                </div>

                                                <!-- File input for changing or uploading the logo -->
                                                <input id="file-upload" type="file" name="favicon_icon" class="image-upload d-none" accept="image/*" onchange="previewFavicon(event)">

                                                <!-- Label for uploading new image -->
                                                <label for="file-upload" class="btn btn-primary mt-2">
                                                    <i class="fa-solid fa-pen"></i> Change Favicon
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Hidden file input for uploading new image -->
                                        <input id="file-upload" type="file" name="favicon_icon" class="image-upload d-none" accept="image/*" onchange="previewFavicon(event)">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Add other general settings fields here -->
                    </div>
                </div>

                <!-- Currency Settings Tab -->


                <!-- Invoice Settings Tab -->


            </div>

            <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
                <div class="row">
                    <livewire:currency-table />
                    @include('currencies.create_modal')
                    @include('currencies.edit_modal')

                    <!-- Add other currency settings fields here -->
                </div>
            </div>
            <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                <div class="row">
                    <div class="form-group col-sm-6 mb-5">
                        <input type="hidden" name="invoice_settings" value="1">
                        {{ Form::label('current_currency', __('messages.setting.currencies') . ':', ['class' => 'form-label required fs-6 mb-3']) }}
                        <select id="currencyType" data-show-content="true" class="form-select " name="current_currency">
                            @foreach (getCurrencies() as $key => $currency)
                            <option value="{{ $currency['id'] }}"
                                {{ getSettingValue('current_currency') == $currency['id'] ? 'selected' : '' }}>
                                {{ $currency['icon'] }}&nbsp;&nbsp;&nbsp; {{ $currency['name'] }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('currency_after_amount', __('messages.setting.currency_position') . ':', ['class' => 'form-label required mb-3']) }}
                        <!-- <label class="form-check form-switch form-check-custom mt-3">
                            <input class="form-check-input currencyAfterAmount" type="checkbox" name="currency_after_amount"
                                id="currencyAfterAmount"
                                {{ $settings['currency_after_amount'] == \App\Models\Setting::CURRENCY_AFTER_AMOUNT ? 'checked' : '' }}>
                            <span class="form-check-label text-gray-600"
                                for="currencyAfterAmount">{{ __('messages.setting.show_currency_behind') }}</span>&nbsp;&nbsp;
                        </label> -->

                        <label class="form-check form-switch form-check-custom mt-3">
                            <input class="custom-switch-input currencyAfterAmount" type="checkbox"
                                name="currency_after_amount"
                                id="currencyAfterAmount" {{ $settings['currency_after_amount'] == \App\Models\Setting::CURRENCY_AFTER_AMOUNT ? 'checked' : '' }}>
                            <span class="form-check-label text-gray-600"
                                for="currencyAfterAmount">{{ __('messages.setting.show_currency_behind') }}</span>&nbsp;&nbsp;
                        </label>

                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('Invoice No Prefix', __('messages.setting.invoice_no_prefix') . ':', ['class' => 'form-label fs-6 mb-3']) }}
                        {{ Form::text('invoice_no_prefix', $settings['invoice_no_prefix'], ['class' => 'form-control', 'placeholder' => __('messages.setting.invoice_no_prefix'), 'maxlength' => '50']) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('decimal_separator', __('messages.setting.decimal_separator') . ':', ['class' => 'form-label required fs-6 mb-3']) }}
                        <div class="radio-button-group">
                            <div class="btn-group btn-group-toggle m-0" data-toggle="buttons">
                                <input type="radio" class="decimal_separator-0" name="decimal_separator"
                                    id="decimal_separator-0" value="."
                                    {{ $settings['decimal_separator'] == '.' ? 'checked' : '' }}>
                                <label for="decimal_separator-0" class="me-2" role="button">DOT(.)</label>

                                <input type="radio" class="decimal_separator-1" name="decimal_separator"
                                    id="decimal_separator-1" value=","
                                    {{ $settings['decimal_separator'] == ',' ? 'checked' : '' }}>
                                <label for="decimal_separator-1" role="button">COMMA(,)</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('Invoice No Suffix', __('messages.setting.invoice_no_suffix') . ':', ['class' => 'form-label fs-6 mb-3']) }}
                        {{ Form::text('invoice_no_suffix', $settings['invoice_no_suffix'], ['class' => 'form-control', 'placeholder' => __('messages.setting.invoice_no_suffix'), 'maxlength' => '50']) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('thousand_separator', __('messages.setting.thousand_separator') . ':', ['class' => 'form-label required fs-6 mb-3']) }}
                        <div class="radio-button-group">
                            <div class="btn-group btn-group-toggle m-0" data-toggle="buttons">
                                <input type="radio" name="thousand_separator" id="thousand_separator-0" value="."
                                    {{ $settings['thousand_separator'] == '.' ? 'checked' : '' }}>
                                <label for="thousand_separator-0" class="me-2" role="button">DOT(.)</label>

                                <input type="radio" name="thousand_separator" id="thousand_separator-1" value=","
                                    {{ $settings['thousand_separator'] == ',' ? 'checked' : '' }}>
                                <label for="thousand_separator-1" role="button">COMMA(,)</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('show_product_description', __('messages.setting.show_product_description') . ':', ['class' => 'form-label mb-3']) }}
                        <!-- <label class="form-check form-switch form-check-custom mt-3 width-fit-content">
                            <input class="form-check-input" type="checkbox" name="show_product_description"
                                {{ $settings['show_product_description'] == 1 ? 'checked' : '' }} value="1">
                        </label> -->
                        <div class="custom-switch mt-3 width-fit-content">
                            <input type="checkbox" id="customSwitch" class="custom-switch-input" name="show_product_description"
                                {{ $settings['show_product_description'] == 1 ? 'checked' : '' }} value="{{ $settings['show_product_description'] == 1 ? '1' : '0' }}">
                            <label class="custom-switch-label" for="customSwitch"></label>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('due_invoice_days', __('messages.setting.send_due_invoice_email_before_x_days') . ':', ['class' => 'form-label mb-3']) }}
                        {{ Form::number('due_invoice_days', !empty($settings['due_invoice_days']) ? $settings['due_invoice_days'] : null, ['class' => 'form-control', 'placeholder' => __('messages.setting.send_due_invoice_email_before_x_days'), 'oninput' => "validity.valid||(value=value.replace(/[e\+\-]/gi,''))"]) }}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="invoiceTemplate" role="tabpanel" aria-labelledby="invoiceTemplate-tab">
            @include('settings.invoice')
            </div>
            <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('terms&conditions', __('messages.product.description').':', ['class' => 'form-label mb-3']) }}
                        {{ Form::textarea('description',null,['class' => 'form-control ', 'placeholder' => __('messages.product.description'),'rows' => '5']) }}
                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="invoiceTemplate" role="tabpanel" aria-labelledby="invoiceTemplate-tab">
</div> -->
        </div>
    </div>
    <div class="card-footer">
        <div class="float-end d-flex mt-5" style="padding-left:20px">
            {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
            <a href="{{ route('settings.edit') }}"
                class="btn  btn-secondary btn-active-light-primary">{{ __('messages.common.cancel') }}</a>
        </div>
    </div>
</div>
</div>

{{ Form::close() }}
@endsection

@push('js')
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('appLogoPreview');
            output.innerHTML = '<img src="' + reader.result + '" alt="App Logo" class="img-fluid" style="max-height: 200px;">';
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewFavicon(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('faviconPreview');
            output.innerHTML = '<img src="' + reader.result + '" alt="App Favicon" class="img-fluid" style="max-height: 200px;">';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endpush