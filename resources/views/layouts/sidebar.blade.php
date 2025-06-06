
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-decoration-none position-relative">
            <img src="{{ getLogoUrl() }}" alt="logo-icon">
           
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            @role('admin')
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    
                    <span class="title">Dashboard</span>
                </a>
            </li>
            @endrole

            @role('client')
            <li class="menu-item">
                <a href="{{ route('client.dashboard') }}" class="menu-link">                    
                    <span class="title">Dashboard</span>
                </a>
            </li>
            @endrole

            @role('admin')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Clients</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('clients.index')}}" class="menu-link">
                            Clients
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('clients.create')}}" class="menu-link">
                            Add Client
                        </a>
                    </li>
 
                </ul>
            </li>
            @endrole

            @role('client')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Contacts</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('contacts.index')}}" class="menu-link">
                            Contact
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('contacts.create')}}" class="menu-link">
                            Add Contact
                        </a>
                    </li>
 
                </ul>
            </li>
            @endrole

            @role('client')
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">inventory</span>
                    <span class="title">Products/Service</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('products.index')}}" class="menu-link">
                            Products/Service
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('products.create')}}" class="menu-link">
                            Add Product/Service
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('category.index')}}" class="menu-link">
                            Categories
                        </a>
                    </li>
                 
 
                </ul>
            </li>

            <li class="menu-item">
                <a href="{{ route('taxes.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">emergency_share_off</span>
                    <span class="title">Taxes</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">request_quote</span>
                    <span class="title">Quotations</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('quotes.index')}}" class="menu-link">
                            Quotations
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('quotes.create')}}" class="menu-link">
                            Add Quotation
                        </a>
                    </li>
 
                </ul>
            </li>

           
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">content_paste</span>
                    <span class="title">Invoices</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('invoices.index')}}" class="menu-link">
                            Invoices
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('invoices.create')}}" class="menu-link">
                            Add Invoice
                        </a>
                    </li>
 
                </ul>
            </li>

            <li class="menu-item">
                <a href="{{ route('payments.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">payments</span>
                    <span class="title">Payments</span>
                </a>
             
            </li>

            <li class="menu-item">
                <a href="{{ route('transactions.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">receipt_long</span>
                    <span class="title">Transactions</span>
                </a>
            </li>
            @endrole
           

            @role('admin')
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">Subscription</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon"> subscriptions</span>
                    <span class="title">Subscriptions</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('subscription-plans.index')}}" class="menu-link">
                           Subscription Plans
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('subscription-plans.list')}}" class="menu-link">
                            Subscriptions List
                        </a>
                    </li>
                    
  
 
                </ul>
            </li>
            @endrole

      
           
           
          

            


            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">System</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">group_add</span>
                    <span class="title">Users</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('users.index')}}" class="menu-link">
                            Users
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('users.create')}}" class="menu-link">
                            Add User
                        </a>
                    </li>
 
                </ul>
            </li>

            <li class="menu-item">
                <a href="{{ route('profile.setting')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">My Profile</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('settings.edit') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">Settings</span>
                </a>

            </li>

   

            <li class="menu-item">
                <a href="{{route('logout')}}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
            </li>
        </ul>
    </aside>
</div>