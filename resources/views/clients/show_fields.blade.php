<div class="row">
    <div class="col-xxl-9">
        <div class="position-relative">
            <img src="{{asset('assets/smart/images/profile/background.jpg')}}" class="rounded-top-3" alt="profile-bg" height="100" width="auto">
            <div class="position-absolute" style="bottom: 25px; right: 25px;">
                <a href="profile.html#" class="btn btn-outline-light text-white hover rounded-2">
                    Update Company Logo
                </a>
            </div>
        </div>
        <div class="card bg-white border-0 rounded-3 mb-4 rounded-top-0">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-end">
                        <div class="flex-shrink-0 position-relative mt-minus-110">
                            <img src="{{ $profilePicture }}" class="rounded-circle border border-2 wh-160" alt="user">
                            <img src="{{asset('assets/smart/images/check.svg')}}" class="position-absolute bottom-0 end-0" alt="check">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="fs-24 mb-1">{{ $client->full_name }}</h4>
                            <!-- Role should be also set here -->
                            <!-- <span class="fs-15 fw-medium">Product designer</span> -->
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-light text-body fw-medium fs-16 px-4 hover hover-bg editClientBtn">
                            <i class="ri-edit-line fw-medium fs-18 me-1"></i>
                            <span>Edit</span>
</button>

                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-end">


                    </div>
                    <div class="d-flex align-items-center">
                        <a href="profile.html#" class="btn btn-primary fw-medium fs-16 px-4 ms-3">
                            <i class="ri-clipboard-line fw-medium fs-18 me-1"></i>
                            <span>Create Invoice</span>
                        </a>
                        <a href="profile.html#" class="btn btn-primary fw-medium fs-16 px-4 ms-3">
                            <i class="ri-money-dollar-box-line fw-medium fs-18 me-1"></i>
                            <span>Create Quotation</span>
                        </a>

                    </div>
                </div>
                <div>

                </div>
            </div>
            <ul class="nav nav-tabs profile-tabs border-0 justify-content-center gap-2 mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="false">Client Details</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="true">Invoices</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="false">Quotations</button>
                </li>
            </ul>
            <div class="row">

                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4 ps-5">


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Full Name</label>
                                            
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55"  readonly value="{{ !empty($client->full_name) ? $client->full_name : 'N/A' }}">
                                                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Email Address</label>
                                            <div class="form-group position-relative">
                                                <input type="email" class="form-control text-dark ps-5 h-55" readonly value="{{ !empty($client->email) ? $client->email : 'N/A' }}">
                                                <i class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Phone</label>
                                            <div class="form-group position-relative">
                                                <input type="number" class="form-control text-dark ps-5 h-55" readonly value="{{ !empty($client->contact) ? $client->contact : 'N/A' }}">
                                                <i class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Address</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" readonly value="{{ !empty($client->address) ? $client->address : 'N/A' }}">
                                                <i class="ri-map-pin-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Country</label>
                                            <div class="form-group position-relative">
                                              <input type="text" class="form-control text-dark ps-5 h-55" readonly value="{{ !empty($client->country->name) ? $client->country->name : 'N/A' }}">

                                                <i class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Town/City</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                    <option selected class="text-dark">California</option>
                                                    <option value="1" class="text-dark">United States</option>
                                                    <option value="2" class="text-dark">Canada</option>
                                                    <option value="3" class="text-dark">France</option>
                                                </select>
                                                <i class="ri-list-ordered position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">State</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                    <option selected class="text-dark">South poal evenue state 4C</option>
                                                    <option value="1" class="text-dark">United States</option>
                                                    <option value="2" class="text-dark">Canada</option>
                                                    <option value="3" class="text-dark">France</option>
                                                </select>
                                                <i class="ri-font-size position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Zip Code</label>
                                            <div class="form-group position-relative">
                                                <input type="number" class="form-control ps-5 h-55" placeholder="Enter number">
                                                <i class="ri-hashtag position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <label class="label text-secondary">Order Notes :</label>
                                            <div class="form-group position-relative">
                                                <textarea class="form-control ps-5 text-dark" placeholder="Some demo text ... " cols="30" rows="5"></textarea>
                                                <i class="ri-information-line position-absolute top-0 start-0 fs-20 ps-20 pt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="timeline-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    @include('clients.invoice.index')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    @include('clients.quote.index')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

 