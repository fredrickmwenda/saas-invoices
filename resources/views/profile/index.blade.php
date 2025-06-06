@extends('layouts.app')
@section('title')
{{ __('messages.user.profile_details') }}
@endsection
@section('content')
<!-- <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                @include('layouts.errors')
                @include('flash::message')
                <div class="card">
                    <form id="userProfileEditForm" method="POST"
                          action="{{ route('update.profile.setting') }}"
                          class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row mb-6">
                                <label class="col-lg-4 form-label required">{{ __('messages.user.avatar').':' }}</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <div class="d-block">
                                        <div class="image-picker">
                                            <div class="image previewImage" id="exampleInputImage"
                                                 style="background-image: url('{{ !empty($user->profile_image) ? $user->profile_image : asset('assets/images/avatar.png') }}')">
                                            </div>
                                            <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                                  title="{{ __('messages.change_avatar') }}">
                                            <label>
                                                <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                                <input type="file" id="profile_image" name="image"
                                                       class="image-upload d-none" accept="image/*"/>
                                                  {{ Form::hidden('avatar_remove') }}
                                            </label>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 form-label">{{ __('messages.user.full_name').':' }}</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            {!! Form::text('first_name', $user->first_name, ['class'=> 'form-control', 'placeholder' => __('messages.client.first_name'), 'required', 'id' => 'editProfileFirstName']) !!}
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            {!! Form::text('last_name', $user->last_name, ['class'=> 'form-control', 'placeholder' => __('messages.client.last_name'), 'required', 'id' => 'editProfileLastName']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 form-label required">{{ __('messages.user.email').':' }}</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    {!! Form::email('email', $user->email, ['class'=> 'form-control', 'placeholder' => __('messages.user.email'), 'required', 'id' => 'isEmailEditProfile']) !!}
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 form-label mb-3">{{ __('messages.user.contact_number').':' }}</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    {{ Form::tel('contact', isset($user)?$user->contact:null, ['class' => 'form-control','onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber', 'placeholder' => __('messages.user.phone_number')]) }}
                                    {{ Form::hidden('region_code',isset($user) ? $user->region_code : null,['id'=>'prefix_code']) }}
                                    <span id="valid-msg" class="hide text-success fw-400 fs-small mt-2">✓ {{ __('messages.placeholder.valid_number') }}</span>
                                    <span id="error-msg" class="hide text-danger fw-400 fs-small mt-2"></span>
                                </div>
                            </div>
                            @hasrole('admin')
                            <div class="float-end mb-6">
                                {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-2']) }}
                                <a href="{{route('admin.dashboard')}}" type="reset"
                                   class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
                            </div>
                            @else
                                <div class="float-end mb-6">
                                    {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-2']) }}
                                    <a href="{{route('client.dashboard')}}" type="reset"
                                       class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
                                </div>
                                @endrole
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Profile</h3>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="profile.html#" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Social</span>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Profile</span>
                </li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-xxl-9">
            <!-- <div class="position-relative">
                <img src="{{asset('trezo/images/profile-bg.jpg')}}" class="rounded-top-3" alt="profile-bg" height="100" width="auto">
                <div class="position-absolute" style="bottom: 25px; right: 25px;">
                    <a href="profile.html#" class="btn btn-outline-light text-white hover rounded-2">
                        Update Cover Photo
                    </a>
                </div>
            </div> -->
            <div class="card bg-white border-0 rounded-3 mb-4 rounded-top-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-end">
                            <div class="flex-shrink-0 position-relative mt-minus-110">
                                <img src="{{ getLogInUser()->profile_image }}" class="rounded-circle border border-2 wh-55" alt="user">
                                <img src="{{asset('assets/smart/images/check.svg')}}" class="position-absolute bottom-0 end-0" alt="check">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="fs-24 mb-1">{{ getLogInUser()->full_name }}</h4>
                                <!-- Role should be also set here -->
                                <!-- <span class="fs-15 fw-medium">Product designer</span> -->
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-outline-light text-body fw-medium fs-16 px-4 hover hover-bg">
                                <i class="ri-edit-line fw-medium fs-18 me-1"></i>
                                <span>Edit</span>
                            </a>
                            
                        </div>
                    </div>
                    <div>
                        <h4 class="fw-semibold fs-14 mb-2">About Me</h4>
                        <p>Molestie tincidunt ut consequat a urna tortor. Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.</p>
                        <h4 class="fw-semibold fs-14 mb-2 pb-1">Social Profile</h4>
                        <ul class="ps-0 mb-0 list-unstyled d-flex flex-wrap gap-2">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #3a559f;">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/basamiy" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #03a9f4;">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #007ab9;">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.reddit.com/user/Basamiy/" target="_blank" class="text-decoration-none wh-30 d-inline-block lh-30 text-center rounded-circle text-white transition-y" style="background-color: #2196f3;">
                                    <i class="ri-reddit-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs profile-tabs border-0 justify-content-center gap-2 mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Profile Details</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Contacts Invoices</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="false">Change Password</button>
                </li>
            </ul>
            <div class="row">

                <div class="col-lg-8">
                    <!-- Arrange the Invoices in an order of their status on the sidebar with amount set on each -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="timeline-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">

                                    <h3 class="mb-3 mb-lg-4">Create Post</h3>
                                    <form>
                                        <div class="mb-4">
                                            <textarea class="form-control" rows="6" placeholder="What's on your mind, Alice Johnson?"></textarea>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <button class="btn btn-primary py-2 px-3 align-items-center d-flex fs-16 fw-medium">
                                                <i class="material-symbols-outlined text-white me-2">send</i>
                                                <span class="py-1 d-none d-sm-inline-block">Publish Post</span>
                                            </button>
                                            <button class="p-0 bg-transparent border-0 fs-20 text-body hover">
                                                <i class="ri-emotion-line"></i>
                                            </button>
                                            <button class="p-0 bg-transparent border-0 fs-20 text-body hover">
                                                <i class="ri-link-m"></i>
                                            </button>
                                            <button class="p-0 bg-transparent border-0 fs-20 text-body hover">
                                                <i class="ri-mic-line"></i>
                                            </button>
                                            <button class="p-0 bg-transparent border-0 fs-20 text-body hover">
                                                <i class="ri-image-line"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 border-bottom pb-4 mb-4">
                                        <h4 class="fs-18 mb-0">About Me</h4>
                                        <div class="dropdown action-opt ms-2 position-relative top-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="More Option">
                                            <button class="p-0 border-0 bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="material-symbols-outlined fs-20 text-body hover">more_horiz</i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="eye"></i>
                                                        View All
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="edit"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="trash-2"></i>
                                                        Delete One
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="lock"></i>
                                                        Block
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h4 class="fs-16 fw-medium mb-2">Introduction</h4>
                                    <p class="mb-4" style="max-width: 691px;">Alice Johnson, a visionary UX/UI designer, blends creativity with user-centric design principles to craft seamless digital experiences. With a passion for innovation and a knack for understanding user needs, [Your Name] has become a driving force in the ever-evolving landscape of digital design. This 5000-word biography aims to delve into Alice's journey, from humble beginnings to becoming a recognized name in the realm of user experience and interface design.</p>

                                    <h4 class="fs-16 fw-medium mb-2">Professional Beginnings</h4>
                                    <p class="mb-4" style="max-width: 691px;">Upon graduating, Alice embarked on their professional journey, eager to make an impact in the world of design. They initially gained experience working at VivoTech, where they collaborated with cross-functional teams to deliver user-centric solutions for various clients. This early exposure provided invaluable insights into the complexities of design processes and solidified Alice's commitment to enhancing user experiences.</p>

                                    <h4 class="fs-16 fw-medium mb-2 pb-1">Expertise in UX/UI Design</h4>
                                    <p style="max-width: 691px;">Driven by a desire for continuous growth, Alice delved deeper into the nuances of UX/UI design, staying abreast of emerging trends, technologies, and methodologies. They immersed themselves in user research, wireframing, prototyping, and usability testing, refining their craft with each project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h3 class="mb-3 mb-lg-4">Set Up New Password</h3>
                                        <div class="dropdown action-opt ms-2 position-relative top-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="More Option">
                                            <button class="p-0 border-0 bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="material-symbols-outlined fs-20 text-body hover">more_horiz</i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="eye"></i>
                                                        View All
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="edit"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="trash-2"></i>
                                                        Delete One
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="lock"></i>
                                                        Block
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <form id="changePassword" class="form">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Current Password</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group" id="show_hide_password">
                                                            <input class="form-control form-control-lg form-control-solid" type="password" name="current_password" id="current_password" placeholder="Enter current password" />
                                                            <!-- <input type="password" required class="form-control" name="password" placeholder="Enter password" > -->
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">New Password</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group" id="show_hide_password">
                                                            <input class="form-control form-control-lg form-control-solid" type="password" name="new_password" id="new_password" placeholder="Enter new password" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Confirm Password</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group" id="show_hide_password">
                                                            <input class="form-control form-control-lg form-control-solid" type="password" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" id="basic-addon2" style="cursor: pointer;min-height: calc(1.9em + 1rem + 2px);"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button type="submit" class="btn btn-primary" id="changePasswordBtn" style="margin-right: 10px;">Save Changes</button>
                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card bg-white border-0 rounded-3 mb-4">
                            <div class="card-body p-0 pb-4">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                        <h3 class="mb-0">Contacts</h3>
                                        <select class="form-select month-select form-control p-0 h-auto border-0 w-90" style="background-position: right 0 center;" aria-label="Default select example">
                                            <option selected="">This Month</option>
                                            <option value="1">Last Month</option>
                                            <option value="2">Last Year</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="default-table-area style-two">
                                    <div class="table-responsive">
                                        <table class="table align-middle border-0">
                                            <tbody>
                                                <tr>
                                                    <td class="pt-1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{asset('trezo/images/user-6.jpg')}}" class="wh-44 rounded-circle" alt="user">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 position-relative top-2">
                                                                <h6 class="mb-0 fs-14 fw-medium">Alex Davis</h6>
                                                                <span class="fs-12 text-body"><a href="tel:0713723353" class="__cf_email__" data-cfemail="7f1e131a073f0b0d1a0510511c1012">0713723353</a></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pt-1">
                                                        <a href="#" class="wh-35 d-inline-block border text-center lh-35 rounded-circle text-decoration-none hover-bg">
                                                            <i class="ri-arrow-right-up-line fs-18"></i>
                                                        </a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
{{ Form::hidden('is_edit', true ,['id' => 'isEdit']) }}
@endsection
@section('phone_js')
<script>
    var phoneNo = "{{ !empty($user) ? (($user->region_code).($user->contact)) : null }}"
</script>
@endsection