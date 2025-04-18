@extends('layouts.front')
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/4.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading mb-10">Awards</h1>
            <p class="pagetitle__desc">Trusted by the world's best organizations, for 15 years and running, it has been
              delivering smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
            <nav>
              <ol class="breadcrumb justify-content-center mt-30 mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Awards</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      Secondary Nav
    =========================== -->
    <section class="secondary-nav sticky-top py-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="nav nav-tabs justify-content-center">
              <a href="about-us.html" class="nav__link">About Us</a>
              <a href="why-us.html" class="nav__link">Why Choose Us</a>
              <a href="leadership-team.html" class="nav__link">Leadership Team</a>
              <a href="awards.html" class="nav__link active">Awards & Recognition</a>
              <a href="pricing.html" class="nav__link">Pricing & Plans</a>
              <a href="faqs.html" class="nav__link">Help & FAQs</a>
              <a href="careers.html" class="nav__link">Careers</a>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- =========================
      Awards
      =========================== -->
    <section class="awards pb-70">
      <div class="container">
        <div class="row heading mb-60">
          <div class="col-12 d-flex align-items-center mb-20">
            <div class="divider divider-primary mr-30"></div>
            <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Trusted by the world's best organizations for 21 years.
            </h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2">
            <p class="heading__desc">SmartData been helping organizations and Providers through the World to manage
              their IT with our unique approach to technology management and consultancy solutions. </p>
            <a href="#" class="btn btn__primary btn__icon mt-20">
              <span>Get Started</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row awards-wrapper">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="{{ asset('assets/smart/images/awards/icons/1.png')}}" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">CSS Design Award</h4>
                <p class="fancybox__desc">A web design & development award platform for digital folk, UI/UX peeps
                  and inspiring leaders of the web.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <span class="pinned-ribbon"></span>
              <div class="fancybox__icon-img">
                <img src="{{ asset('assets/smart/images/awards/icons/2.png')}}" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">W3 Design Award</h4>
                <p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
                  Marketing, Video, Sites, Apps & Social content.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="{{ asset('assets/smart/images/awards/icons/3.png')}}" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">The FWA Award</h4>
                <p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to showcase
                  cutting edge creativity, regardless
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #4 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="{{ asset('assets/smart/images/awards/icons/3.png')}}" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">WWW Awards</h4>
                <p class="fancybox__desc">The awards that recognize the talent and effort of the best web
                  designers, developers and agencies in the world.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Awards -->

    <!-- =====================
           Clients
    ======================== -->
    <section class="clients border-top pt-50 pb-50">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/4.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/4.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/5.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/5.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/6.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/6.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{ asset('assets/smart/images/clients/7.png')}}" alt="client">
                <img src="{{ asset('assets/smart/images/clients/7.png')}}" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
       Banner layout 5
      =========================== -->
    <section class="banner-layout5 pt-130 pb-0">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/4.jpg')}}" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between pb-80">
            <div class="heading heading-light mb-50">
              <div class="divider divider-white"></div>
              <h3 class="heading__title mb-30">Easy solutions for all difficult IT problems, keep business safe &
                ensure high availability.
              </h3>
            </div><!-- /.heading -->
            <div class="row">
              <div class="col-sm-6">
                <div class="contact-info">
                  <div class="contact__icon"><i class="icon-map-marker"></i></div>
                  <ul class="contact__list list-unstyled">
                    <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                  </ul>
                </div><!-- /.contact-item-->
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <div class="contact-item">
                  <div class="contact__icon"><i class="icon-mail"></i></div>
                  <ul class="contact__list list-unstyled">
                    <li><a href="mailto:SmartData@7oroof.com">Email: SmartData@7oroof.com</a></li>
                    <li><a href="tel:5565454117">Phone: +55 654 541 17</a></li>
                  </ul>
                </div><!-- /.contact-item-->
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6"></div><!-- /.col-sm-6 -->
            </div><!-- /.row-->
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
            <div class="banner__content">
              <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/3.png')}}" alt="background"></div>
              <div class="quote__icon"><i class="icon-quote"></i></div>
              <div class="row heading heading-light">
                <div class="col-sm-6">
                  <h3 class="heading__title mb-30">450,000 client’s interactions!</h3>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                  <p class="heading__desc mb-20">Provide users with appropriate view access to requests, problems,
                    changes, contracts & solutions with experienced professionals.</p>
                  <p class="heading__desc mb-20">As one of the world's largest ITService Providers, we are ready to
                    help.
                  </p>
                  <a href="#" class="btn btn__white btn__bordered btn__xl btn__icon">
                    <span>Download Brochure</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
              <div class="row counters-wrapper counters-light mt-70">
                <!-- counter item #1 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">6,154</h4>
                    <p class="counter__desc">Projects And Software Developed in 2021</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #2 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">2,512</h4>
                    <p class="counter__desc">Qualified Employees And Developers With Us</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
                <!-- counter item #3 -->
                <div class="col-sm-4">
                  <div class="counter-item">
                    <h4 class="counter">1,784</h4>
                    <p class="counter__desc">Satisfied Clients We Have Served Globally</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->
            </div><!-- /.banner__content -->
          </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 5 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Recent Articles</h2>
              <h3 class="heading__title">Resource Library</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">May 13, 2020</span>
                </div>
                <h4 class="post__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                    Function</a>
                </h4>
                <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                  your basic IT needs...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/2.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Tech</a><a href="#">Communications</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">April 17, 2020</span>
                </div>
                <h4 class="post__title"><a href="#">Succession Risks That Threaten Your Leadership Strategy</a>
                </h4>
                <p class="post__desc">Today’s organizations need a quality bench of leaders to drive business
                  outcomes and satisfy employees, customers and investors who now demand more transparency and
                  accountability...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/3.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">March 20, 2020</span>
                </div>
                <h4 class="post__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                    Employee?</a>
                </h4>
                <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                  your basic IT needs...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
    @endsection

 
  

