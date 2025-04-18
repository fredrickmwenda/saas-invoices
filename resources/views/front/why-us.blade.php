@extends('layouts.front')
@section('content')
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-5">
            <h1 class="pagetitle__heading">Easy solutions for all difficult IT problems, keep business safe & ensure
              high availability.</h1>
            <a href="it-solutions.html" class="btn btn__white mt-20 mr-30">Our Services</a>
            <a href="request-quote.html" class="btn btn__white btn__bordered btn__icon mt-20">
              <span>Get Started</span><i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-7 d-flex justify-content-end cta-banner-wrapper">
            <div class="cta-banner">
              <div class="cta__icon"><i class="icon-developer"></i></div>
              <h4 class="cta__title">Since 1999</h4>
              <p class="cta__desc mb-25">Provide users with appropriate view and access to requests,
                problems, changes and reports.</p>
              <a href="#" class="btn btn__link btn__secondary btn__icon px-0">
                <span>Find Your Solution</span> <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      Secondary Nav
    =========================== -->
    <section class="secondary-nav secondary-nav-layout2 sticky-top py-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="nav nav-tabs justify-content-center">
              <a href="about-us.html" class="nav__link">About Us</a>
              <a href="why-us.html" class="nav__link active">Why Choose Us</a>
              <a href="leadership-team.html" class="nav__link">Leadership Team</a>
              <a href="awards.html" class="nav__link">Awards & Recognition</a>
              <a href="pricing.html" class="nav__link">Pricing & Plans</a>
              <a href="faqs.html" class="nav__link">Help & FAQs</a>
              <a href="careers.html" class="nav__link">Careers</a>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
      About Layout 3
    =========================== -->
    <section id="about" class="about-layout3 pt-130 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="heading mb-30">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Timely Service Delivery &amp; Incident Resolutions!! </h2>
              </div>
              <h3 class="heading__title mb-40">Manages service delivery across various business like, HR, Legal and
                other IT departments!!
              </h3>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
        <div class="row about__Text">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
            <i class="icon-quote"></i>
            <p>SmartData has been helping organizations throughout the World to manage their IT with our unique approach
              to technology management and consultancy solutions. Provide users with appropriate view and access
              permissions to requests, problems, changes, contracts, assets, solutions, and reports </p>
            <img src="assets/images/about/singnture.png" alt="singnture" class="mb-20">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
            <p>As one of the world's largest ITService Providers, our deep pool of certified engineers and IT staff are
              ready to help you to keep your IT business safe & ensure high availability.</p>
            <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">
              <li>Eliminate Repeat Entry</li>
              <li>Simpliy Communication</li>
              <li>Drive Business Process</li>
              <li>Speed Up Transactions</li>
              <li>Structure Data & Docs</li>
              <li>Automate Workflows</li>
            </ul>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
        <div class="row align-items-center mt-60">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="about__img about__img-1">
              <img src="assets/images/about/2.jpg" alt="about">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="about__img">
              <img src="assets/images/about/4.jpg" alt="about">
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

    <!-- =====================
           Clients
     ======================== -->
    <section class="clients pt-50 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text__link text-center mb-30">Trusted By The World's
              <a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">Best Organizations</a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
           Banner layout 3
    =========================== -->
    <section class="banner-layout3 pb-70">
      <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
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
                <img src="assets/images/banners/5.jpg" alt="banner">
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
      portfolio Grid
    ============================= -->
    <section class="portfolio-grid portfolio-grid-carousel pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading mb-50">
              <div class="d-flex align-items-center">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Success Stories</h2>
              </div>
              <h3 class="heading__title mb-0">Latest Case Studies</h3>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "autoplay": true,"autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- portfolio item #1 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Building</a><a href="#">Interior</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Financial’s Need For
                      Strategic Advisor</a></h4>
                  <p class="portfolio__desc">We delivered solutions at every step, and moved seamlessly into a more
                    proactive role as a strategic advisor, providing support and guidance across all IT topics.</p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #2 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Software</a><a href="#">Support</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">24x7 System Monitoring and
                      Alert Response</a></h4>
                  <p class="portfolio__desc">This single, unified platform integrates all operational phases of
                    selling and activation of their wireless services and devices, and serves as the backbone of the
                    operations.</p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #3 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Management</a><a href="#">Cloud</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Nonprofit Organization
                      Utilized Security</a></h4>
                  <p class="portfolio__desc">Servers going down on a weekly basis had become the organization’s
                    “normal.” We came on board with the objective of stabilizing the environment, assisting </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #4 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/4.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Digital</a><a href="#">HR</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Powerful IT Upgrade Aligns
                      With Your Objectives</a></h4>
                  <p class="portfolio__desc">They needed a robust management solution to organize archive critical
                    documents for client cases, and wanted to determine solutions at every step, and moved </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #5 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/5.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Consulting</a><a href="#">Management</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">The Best IT Practices in Cloud
                      and Security</a></h4>
                  <p class="portfolio__desc">This single, unified platform integrates all operational phases of
                    selling and activation of their wireless services and devices, and serves as the backbone of the
                    operations.</p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
              <!-- portfolio item #6 -->
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/6.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__content">
                  <div class="portfolio__cat">
                    <a href="#">Software</a><a href="#">Security</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Helping Companies With
                      Healthcare Inustry</a></h4>
                  <p class="portfolio__desc">Servers going down on a weekly basis had become the organization’s
                    “normal.” We came on board with the objective of stabilizing the environment, assisting </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid  -->

    <!-- =========================
       Banner layout 1
      =========================== -->
    <section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
            <div>
              <div class="heading heading-light">
                <h3 class="heading__title mb-30">All Kinds Of IT Services That
                  Vow Future Business Success!</h3>
                <p class="heading__desc mb-30">We are experienced professionals who understand that It services is
                  changing,
                  and are partners who care about your success. As one of the world's largest IT Service Providers,
                  our
                  deep pool of certified engineers and IT staff are ready to help.
                </p>
              </div><!-- /.heading -->
              <div class="d-flex align-items-center mb-40">
                <a href="#" class="btn btn__white btn__icon mr-30">
                  <span>Get Started</span>
                  <i class="icon-arrow-right"></i>
                </a>
                <a href="request-quote.html" class="btn btn__white btn__bordered">Request Demo</a>
              </div>
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
                  <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__thumb">
                  <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
              </div><!-- /.slcik-nav -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-12">
                    <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                    <p class="contact-panel__desc mb-30">Our deep pool of certified engineers and IT staff are ready to
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
    </section><!-- /.Banner layout 1 -->

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
                  <img src="assets/images/blog/grid/1.jpg" alt="blog image">
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
                  <img src="assets/images/blog/grid/2.jpg" alt="blog image">
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
                  <img src="assets/images/blog/grid/3.jpg" alt="blog image">
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

    <!-- ========================
      Footer
    ========================== -->

<!-- 
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script> -->
@endsection