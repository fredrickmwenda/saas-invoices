@extends('layouts.front')
@section('content')


    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout10 bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/8.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Industries</h1>
            <p class="pagetitle__desc">We are experienced professionals who understand that It services is changing, and
              are true partners who care about your success. Our team provides a consultative approach on emerging
              technology.</p>
            <div class="d-flex align-items-center flex-wrap">
              <a href="contact-us.html" class="btn btn__white mr-30">Contact Us</a>
              <a class="video__btn video__btn-rounded video__btn-white popup-video"
                href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Our Video!</span>
              </a>
            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 bg-gray pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
              <h3 class="heading__title">View & access permissions to requests, solutions, and reports with our
                experienced Staff!</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <h4 class="service__title">Education And <br> Non-Profit</h4>
                <p class="service__desc">Drive your business and manage risk with a global industry leader in
                  cybersecurity, cloud, and managed security services and extend your team with leading experts.</p>
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__content -->
              <div class="service__img">
                <img src="{{ asset('assets/smart/images/services/1.jpg')}}" alt="service" class="w-100">
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <h4 class="service__title">Accounting And <br> Finance</h4>
                <p class="service__desc">Cloud computing is the on-demand availability of computer system
                  resources,
                  especially data storage and computing power, without direct active management </p>
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__content -->
              <div class="service__img">
                <img src="{{ asset('assets/smart/images/services/2.jpg')}}" alt="service" class="w-100">
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <h4 class="service__title">Government And <br> Public</h4>
                <p class="service__desc">Trying to solve all your IT challenges internally can become costly and a
                  major distraction, Leveraging knowledgeable IT consulting firms like ushelps</p>
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__content -->
              <div class="service__img">
                <img src="{{ asset('assets/smart/images/services/3.jpg')}}" alt="service" class="w-100">
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <h4 class="service__title">Energy And<br> Utilities</h4>
                <p class="service__desc">With shorter product cycles, rapid innovation, and mergers contributing to
                  constant change, you are faced with making business decisions every day</p>
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__content -->
              <div class="service__img">
                <img src="{{ asset('assets/smart/images/services/4.jpg')}}" alt="service" class="w-100">
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <h4 class="service__title">Legal Stuff And <br> Law Firms</h4>
                <p class="service__desc">While you can’t predict unexpected events, we’ll ensure the right
                  precautions are in place to minimize downtime and keep you moving in the right direction.</p>
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__content -->
              <div class="service__img">
                <img src="{{ asset('assets/smart/images/services/5.jpg')}}" alt="service" class="w-100">
              </div><!-- /.service__img -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item service-item-custom">
              <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/16.png')}}" alt="background"></div>
              <div>
                <h4 class="service__title">450,000 client’s interactions!</h4>
                <p class="service__desc mb-30">Provide users with appropriate view access to requests, problems,
                  changes,
                  contracts & solutions with experienced professionals.</p>
                <p class="service__desc mb-30">As one of the world's largest ITService Providers, we are ready to
                  help.
                </p>
              </div>
              <a href="services-it-solutions-single.html" class="btn btn__white btn__bordered btn__icon btn__xl">
                <span>Download Brochure</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- =========================
           Banner layout 3
    =========================== -->
    <section id="banner3" class="banner-layout3 pb-70">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 fancybox-light">
            <div class="heading heading-light mb-60">
              <h3 class="heading__title mb-30">Keep business safe & ensure high availability.</h3>
              <p class="heading__desc">As one of the world's largest ITService Providers, our deep pool of certified
                engineers and IT staff are ready to help you to keep your IT business safe & ensure high availability.
              </p>
            </div><!-- /.heading -->
            <!-- fancybox item #1 -->
            <div class="fancybox-item d-flex flex-wrap">
              <div class="fancybox__icon">
                <i class="icon-coding"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Knowledge Base</h4>
                <p class="fancybox__desc">Software assets including purchasing, deployment & maintenance. Manage
                  all aspects of your software assets including purchasing, deployment, maintenance, utilization, and
                  disposal.
                </p>
                <a href="#" class="btn btn__white btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
            <!-- fancybox item #2 -->
            <div class="fancybox-item d-flex flex-wrap">
              <div class="fancybox__icon">
                <i class="icon-programming2"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Custom Requests</h4>
                <p class="fancybox__desc">Build and publish dynamic request templates with associated workflows,
                  all aspects of your software assets including purchasing, deployment, maintenance, utilization, and
                  disposal.
                </p>
                <a href="#" class="btn btn__white btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
            <!-- fancybox item #3 -->
            <div class="fancybox-item d-flex flex-wrap">
              <div class="fancybox__icon">
                <i class="icon-script"></i>
              </div><!-- /.fancybox__icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">License Management</h4>
                <p class="fancybox__desc">Build and publish dynamic request templates with associated workflows,
                  all aspects of your software assets including purchasing, deployment, maintenance, utilization, and
                  disposal.
                </p>
                <a href="#" class="btn btn__white btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="sticky-top">
              <div class="banner-img">
                <img src="{{ asset('assets/smart/images/banners/5.jpg')}}" alt="banner">
                <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div>
              <div class="d-flex flex-wrap justify-content-end read-note mt-40">
                <div class="rating mb-10 mr-50">
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                </div>
                <p class="read-note__text color-white">
                  <span class="font-weight-bold text-underlined">99.9% Customer Satisfaction</span>
                  based on 750+ reviews and 20,000 Objective Resource
                </p>
              </div>
            </div>
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 3 -->

    <!-- =========================== 
      portfolio carousel 
    ============================= -->
    <section class="portfolio-carousel">
      <div class="container">
        <div class="row mb-70">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading">
              <div class="d-flex align-items-center">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Latest Case Studies</h2>
              </div>
              <h3 class="heading__title mb-0">We provide solutions to big & small organizations</h3>
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2">
            <p class="heading__desc mb-10">SmartData been helping organizations and Providers through the World to
              manage their IT with our unique approach to technology management and consultancy solutions. </p>
            <a href="case-studies-carousel.html" class="btn btn__primary btn__icon mt-20 mr-20">
              <span>Our Pricing</span>
              <i class="icon-arrow-right"></i>
            </a>
            <a href="request-quote.html" class="btn btn__secondary btn__link btn__icon mt-20">
              <span>Request Demo</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="portfolio-carousel-wrapper">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                <!-- portfolio item #1 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/1.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Building</a><a href="#">Interior</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">Financial’s Need For
                        Strategic Advisor</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio item #2 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/2.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Software</a><a href="#">Support</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">24x7 System Monitoring and
                        Alert Response</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio item #3 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/3.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Management</a><a href="#">Cloud</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">Nonprofit Organization
                        Utilized Security</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio item #4 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/4.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Digital</a><a href="#">HR</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">Powerful IT Upgrade Aligns
                        With Your Objectives</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio item #5 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/5.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Consulting</a><a href="#">Management</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">The Best IT Practices in Cloud
                        and Security</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio item #6 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{ asset('assets/smart/images/portfolio/carousel/6.jpg')}}" alt="portfolio img">
                    <div class="portfolio__hover">
                      <a class="portfolio__icon" href="case-studies-single.html">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div><!-- /.portfolio__hover-->
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <div class="portfolio__cat">
                      <a href="#">Software</a><a href="#">Security</a>
                    </div><!-- /.portfolio-cat -->
                    <h4 class="portfolio__title"><a href="#">Helping Companies With
                        Healthcare Inustry</a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio carousel -->

    <!-- =========================
       Banner layout 2
      =========================== -->
    <section class="banner-layout2 pb-0 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/8.jpg')}}" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner">
            <div class="heading heading-light">
              <h3 class="heading__title mb-30">Satisfied Users Over The Globe</h3>
            </div>
            <div class="testimonials testimonials-wrapper">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                    chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                    <p class="testimonial__meta-desc">Digital Media Manager</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                    make an impact, you’ve come to the right place. We will transform your business through our
                    techniques! </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                    chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">Ayman</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                    make an impact, you’ve come to the right place. We will transform your business through our
                    techniques! </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial__desc color-white">My project was a simple & small task, but the
                    persistence and
                    determination turned it into an awesome and great project which make me happy .
                  </p>
                  <div class="testimonial__meta">
                    <h4 class="testimonial__meta-title">John Peter</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
              </div>
              <div class="slider-nav">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/smart/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
              </div><!-- /.slcik-nav -->
            </div><!-- /.testimonials -->
            <div class="divider divider-light w-100 mt-60 mb-60"></div>
            <div class="heading heading-light">
              <h3 class="heading__title mb-30">Our Trusted Clients</h3>
            </div>
            <div class="clients">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
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
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="{{ asset('assets/php/contact.php')}}" id="contactForm">
                <div class="row">
                  <div class="col-12">
                    <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                    <p class="contact-panel__desc mb-30">Our deep pool of certified engineers and IT staff are ready
                      to
                      help you to keep your IT business safe & ensure high availability.</p>
                  </div> <!-- /.col-12 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Inquiry</option>
                        <option value="1">IT Management Services 2</option>
                        <option value="2">IT Management Services 3</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                      <input type="checkbox" class="custom-control-input" id="acceptTerms">
                      <label class="custom-control-label" for="acceptTerms">I accept the privacy and terms.</label>
                    </div>
                    <button type="submit" class="btn btn__primary btn__xl btn__block">Submit Request </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <!-- ======================
       FAQ
    ========================= -->
    <section id="faqs" class="faq pt-120 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Our Pricing Features</h2>
              <h3 class="heading__title">Frequently asked questions</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row" id="accordion">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__title" href="#">Which Plan Is Right For Me?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__title" href="#">Do I have to commit to a contract?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item opened">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__title" href="#">What Payment Methods Are Available?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse show" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse4">
                <a class="accordion__title" href="#">What if I pick the wrong plan?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse4" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse5">
                <a class="accordion__title" href="#">Any contracts or commitments?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse5" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse6">
                <a class="accordion__title" href="#">What are my payment options?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse6" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse7">
                <a class="accordion__title" href="#">How does the free trial work?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse7" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse8">
                <a class="accordion__title" href="#">What Payment Methods Are Available?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse8" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse9">
                <a class="accordion__title" href="#">How does the free trial work?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse9" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item opened">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse10">
                <a class="accordion__title" href="#">If I have questions, where can I find answers? </a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse10" class="collapse show" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <!-- ========================
      Footer
    ========================== -->
@endsection