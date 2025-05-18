 <header class="header header-transparent">
  <!-- if its contact-us, case-study, single and blog single post the header class is <header class="header header-light"> -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

          <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{ asset('assets/images/logo/logo.png')}}" class="logo-light" alt="logo">
            <img src="{{ asset('assets/images/logo/logo-b.png')}}" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item  has-dropdown">
                <a href="{{route('index')}}"  class=" nav__item-link">Home</a>
   
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    
                    <a href="{{ route ('about')}}" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                      
                        <a href="{{route('services')}}" class="nav__item-link dropdown-menu-title">IT Solutions</a>
                        <ul class="nav flex-column">
              
                          
                          <li class="nav__item"><a class="nav__item-link"
                              href="#">Structured Cabling</a></li>
                          <li class="nav__item"><a class="nav__item-link" href="#">Hardware Security</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="#">Domain Selling</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="#">Web Hosting</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="#">IT
                              Consulting</a>
                          </li> <!-- /.nav-item -->

                          
               
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="#">IT Support</a>
                          </li>

                          <li class="nav__item"><a class="nav__item-link" href="#">CCTV Installation</a>
                          </li> <!-- /.nav-item -->

                          <li class="nav__item"><a class="nav__item-link" href="#">Alarm Security</a>
                          </li> <!-- /.nav-item -->
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 industries-single-industry.html -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="#">UI & UX Design</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="#"> Graphic Design
                              </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="#">Web Design </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="#">Software Development</a></li> <!-- /.nav-item -->
                    
                          <li class="nav__item"><a class="nav__item-link" href="#">Mobile Apps
                             </a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="#">Apis Integrations</a>
                          </li>

                          <li class="nav__item"><a class="nav__item-link"
                              href="#">SAAS Services</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
              <a href="{{route('blog')}}" class="nav__item-link">Blog</a>
  
              </li><!-- /.nav-item -->
             
              <li class="nav__item">
                <a href="{{ route ('contact')}}" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="{{route('request-quote')}}" class="btn action__btn-contact">Request A Quote</a>
            </li>
            @if(!Auth::check())
            <li>
              <button class="action__btn action__btn-login open-login-popup">
                <i class="icon-user"></i><span>Login</span>
              </button>
            </li>
            @endif
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->