@extends('layouts.front')
@section('content')
    <section class="page-title page-title-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/Data/page-titles1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Empowering Global Success</h1>
            <p class="pagetitle__desc">Fueled by innovation, we propel businesses to global success through expert IT services .</p>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
              <a href="{{route('services')}}" class="btn btn__primary mx-3">Our Services</a>
              <a class="video__btn video__btn-rounded video__btn-white popup-video mx-3"
                href="£">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Our Video!</span>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">about</li>
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
              <a href="{{ route('about')}}" class="nav__link active">About Us</a>
              <!-- <a href="why-us.html" class="nav__link">Why Choose Us</a> -->
              <!-- <a href="leadership-team.html" class="nav__link">Leadership Team</a> -->
              <!-- <a href="awards.html" class="nav__link">Awards & Recognition</a> -->
              <!-- <a href="pricing.html" class="nav__link">Pricing & Plans</a> -->
              <!-- <a href="{{ route('faqs')}}" class="nav__link">Help & FAQs</a> -->
              <!-- <a href="careers.html" class="nav__link">Careers</a> -->
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading mb-30">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
              </div>
              <h3 class="heading__title mb-40">Offer technology Services to Corporations, Clients and IT Departments!!
              </h3>
            </div><!-- /heading -->
            <div class="position-relative offset-xl-1">
              <i class="icon-quote"></i>
              <p class="itle__desc">At the heart of Servoll Technologies is our unwavering commitment to excellence, manifested through the delivery of innovative IT solutions that serve as the cornerstone for driving sustained business success.
        By leveraging cutting-edge technology and adhering to industry best practices, we craft tailored IT services that empower organizations to navigate the digital landscape with confidence. 
        Our customer-first philosophy is woven into the fabric of our approach, ensuring that we not only meet but exceed expectations. Beyond the transactional nature of business, we strive to build enduring partnerships with our clients, recognizing that sustained success is built on mutual trust, collaboration, and a shared vision for the future.</p>
              <!-- <ul class="list-items list-items-layout2 list-unstyled d-flex flex-wrap list-horizontal mb-50">
                <li>Eliminate Repeat Entry</li>
                <li>Simplify Communication</li>
                <li>Drive Business Process</li>
                <li>Speed Up Transactions</li>
                <li>Structure Data & Docs</li>
                <li>Automate Workflows</li>
              </ul> -->
              <!-- <img src="{{ asset('assets/smart/images/about/singnture.png')}}" alt="singnture"> -->
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <div class="about__img mb-40">
              <img src="{{ asset('assets/smart/Data/about4.jpg')}}" alt="about">
              <blockquote class="blockquote d-flex align-items-end mb-0">
                <div class="blockquote__avatar">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/1.png')}}" alt="thumb">
                </div>
                <div class="blockquote__content">
                  <h4 class="blockquote__title mb-0">As one of the best upcoming ITService Providers we are bridging the gap of tech and society.
                  </h4>
                </div><!-- /.blockquote__content -->
              </blockquote><!-- /.blockquote -->
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ======================
    History Timeline
    ========================= -->
    

    <!-- ======================
    Testimonials 
    ========================= -->
    <section class="testimonials pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img src="{{ asset('assets/smart/images/backgrounds/map.png')}}" alt="map">
            <!-- Testimonial #1 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{ asset('assets/smart/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                  As one of the best upcoming ITService Providers we are bridging the gap of tech and society
                  
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #2 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{ asset('assets/smart/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                As one of the best upcoming ITService Providers we are bridging the gap of tech and society.
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #3 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{ asset('assets/smart/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                As one of the best upcoming ITService Providers we are bridging the gap of tech and society.
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #4 -->
            <div class="testimonial-box testimonial-hover-left">
              <div class="testimonial__thumb">
                <img src="{{ asset('assets/smart/images/testimonials/thumbs/4.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                As one of the best upcoming ITService Providers we are bridging the gap of tech and society.
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #5 -->
            <div class="testimonial-box testimonial-hover-left">
              <div class="testimonial__thumb">
                <img src="{{ asset('assets/smart/images/testimonials/thumbs/5.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                As one of the best upcoming ITService Providers we are bridging the gap of tech and society.
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="pb-100">
        <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/2.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="cta d-flex align-items-center">
            <div class="cta__item d-flex align-items-center">
              <div class="cta__icon">
                <i class="icon-programmer"></i>
              </div><!-- /.cta__icon -->
              <div class="cta__content">
                <h4 class="cta__title">Small/Growing Business!</h4>
                <p class="cta__desc mb-0">Professional IT support packages tailored to align with your business
                  objectives
                  and meet your needs.</p>
              </div><!-- /.cta__content -->
            </div><!-- /.cta__item -->
            <div class="or-seperator">or</div>
            <div class="cta__item d-flex align-items-center">
              <div class="cta__content text-right">
                <h4 class="cta__title">Enterprise Level Organization</h4>
                <p class="cta__desc mb-0">Professional IT support packages tailored to align with your business
                  objectives and meet your needs.</p>
              </div><!-- /.cta__content -->
              <div class="cta__icon">
                <i class="icon-developer"></i>
              </div><!-- /.cta__icon -->
            </div><!-- /.cta__item -->
          </div><!-- /.cta -->
          <p class="text__link text-center mt-40 mb-0">IT Management Solutions for your Business,
            <a href="#" class="btn btn__link btn__secondary btn__icon px-0">
              <span>Explore Our Plans</span> <i class="icon-arrow-right"></i>
            </a>
          </p>
        </div><!-- /.container -->
      </div>
    </section><!-- /.testimonials -->

    <!-- =========================
       Banner layout 5
      =========================== -->
  

    <!-- ======================
      Blog Grid
    ========================= -->
    <!-- <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Recent Articles</h2>
              <h3 class="heading__title">Resource Library</h3>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
              </div>
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div>
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
              </div>
            </div><
          </div>
          
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/2.jpg')}}" alt="blog image">
                </a>
              </div>
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Tech</a><a href="#">Communications</a>
                  </div>
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
              </div>
            </div>
          </div>
          
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{ asset('assets/smart/images/blog/grid/3.jpg')}}" alt="blog image">
                </a>
              </div>
              <div class="post__content">
                <div class="post__meta d-flex flex-wrap">
                  <div class="post__meta-cat">
                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                  </div>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- /.blog Grid -->
@endsection

