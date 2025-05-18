@php
    $notifications = getNotification();
    $notificationCount = count($notifications);
    $styleCss = 'style';
@endphp

<!-- Start Header Area -->
<header class="header-area bg-white mb-4 rounded-bottom-15" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6">
            <div class="left-header-content">
                <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </li>
                    <li>
                        <form class="src-form position-relative">
                            <input type="text" class="form-control" placeholder="Search here.....">
                            <button type="submit" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </li>
                  
                </ul>
            </div>
        </div>

        <div class="col-lg-8 col-sm-6">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                    <li class="header-right-item">
                        <div class="light-dark">
                            <button class="switch-toggle settings-btn dark-btn p-0 bg-transparent" id="switch-toggle">
                                <span class="dark"><i class="material-symbols-outlined">light_mode</i></span> 
                                <span class="light"><i class="material-symbols-outlined">dark_mode</i></span>
                            </button>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications language">
                            <button class="btn btn-secondary dropdown-toggle border-0 p-0 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">translate</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 dropdown-menu-end">
                                <span class="fw-semibold fs-15 text-secondary title">Choose Language</span>
                                <div class="max-h-275" data-simplebar>
                                    <div class="notification-menu">
                                        <!-- <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/usa.svg')}}" class="wh-30 rounded-circle" alt="united-states">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">English</span>
                                                </div>
                                            </div>
                                        </a> -->
                                    </div>
                                   
                                   
                       
                                    <div class="notification-menu mb-0">
                                        <!-- <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/spain.svg')}}" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Spain</span>
                                                </div>
                                            </div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="fullscreen-btn bg-transparent p-0 border-0" id="fullscreen-button">
                            <i class="material-symbols-outlined text-body">fullscreen</i>
                        </button>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications noti">
                            <button class="btn btn-secondary border-0 p-0 position-relative badge" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">notifications</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                <div class="d-flex justify-content-between align-items-center title">

                                @if (count(getNotification()) != 0)
                                    <span class="fw-semibold fs-15 text-secondary">Notifications <span class="fw-normal text-body fs-14">{{ count(getNotification()) }}</span></span>
                                    <button class=" read-all-notification p-0 m-0 bg-transparent border-0 fs-14 text-primary" id="readAllNotification">Clear All</button>
                                @endif
                         
                                </div> 

                                <div class="max-h-217" data-simplebar>
                                @if ($notificationCount > 0)
                            @foreach ($notifications as $notification)
 
                                <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="fa-solid {{ getNotificationIcon($notification->type) }}"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>{{ $notification->title }}</p>
                                                    <span class="fs-13">
                                                        {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans(null, true) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        @else
                            <div class="empty-state fs-6 text-gray-800 fw-bold text-center mt-5" data-height="400">
                                <p>{{ __('messages.notification.you_don`t_have_any_new_notification') }}</p>
                            </div>
                        @endif
                                 
                                </div>

                                <a href="notification.html" class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3">
                                    <span>See All Notifications </span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle wh-40 administrator" src="{{ getLogInUser()->profile_image }}" alt="admin">
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-none d-xxl-block">
                                            <div class="d-flex align-content-center">
                                                <h3> {{ getLogInUser()->full_name }}</h3>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-menu border-0 bg-white dropdown-menu-end">
                                <div class="d-flex align-items-center info">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-circle wh-30 administrator" src="{{ getLogInUser()->profile_image }}" alt="admin">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h3 class="fw-medium"> {{ getLogInUser()->full_name }}</h3>
                                        <!-- <span class="fs-12">Marketing Manager</span> -->
                                    </div>
                                </div>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="#">
                                            <i class="material-symbols-outlined">account_circle</i>
                                            <span class="ms-2">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="">
                                            <i class="material-symbols-outlined">chat</i>
                                            <span class="ms-2">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="to-do-list.html">
                                            <i class="material-symbols-outlined">format_list_bulleted </i>
                                            <span class="ms-2">My Task</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="my-profile.html">
                                            <i class="material-symbols-outlined">credit_card </i>
                                            <span class="ms-2">Billing</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="settings.html">
                                            <i class="material-symbols-outlined">settings </i>
                                            <span class="ms-2">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="tickets.html">
                                            <i class="material-symbols-outlined">support</i>
                                            <span class="ms-2">Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="lock-screen.html">
                                            <i class="material-symbols-outlined">lock</i>
                                            <span class="ms-2">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="login.html">
                                            <i class="material-symbols-outlined">logout</i>
                                            <span class="ms-2">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="theme-settings-btn p-0 border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="material-symbols-outlined" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings">settings</i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
