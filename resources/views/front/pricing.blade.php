@extends('layouts.front')
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 bg-overlay bg-overlay-gradient bg-parallax text-center">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/5.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <span class="pagetitle__subheading">Nationwide Service, Local Expertise</span>
            <h1 class="pagetitle__heading">Offering the latest software and
              IT services to our customers!</h1>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
              <a href="projects-grid.html" class="btn btn__primary mx-3">Our Services</a>
              <a class="video__btn video__btn-rounded video__btn-white popup-video mx-3"
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

    <!-- =========================
      Pricing  
      =========================== -->
    <section class="pricing pt-0">
      <div class="container">
        <div class="row row-no-gutter pricing-wrapper">
          <!-- pricing item #1-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item d-flex flex-column justify-content-between">
              <div>
                <div class="pricing__top">For Small Teams</div>
                <div class="pricing__header">
                  <h5 class="pricing__title">Starter Plan</h5>
                  <div class="pricing__price">
                    <span class="pricing__currency">$</span><span>49,99</span><span
                      class="pricing__time">/Monthly</span>
                  </div>
                </div><!-- /.pricing__header  -->
                <div class="pricing__content">
                  <p class="pricing__desc">Fast project turnaround time, substantial cost savings & quality
                    standards.
                  </p>
                  <ul class="pricing__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Full Social Profiles</li>
                  </ul>
                </div><!-- /.pricing__content  -->
              </div>
              <div class="pricing__footer">
                <a href="#" class="btn btn__secondary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #2-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item d-flex flex-column justify-content-between">
              <div>
                <div class="pricing__top">For Small And Beginning Business</div>
                <div class="pricing__header">
                  <h5 class="pricing__title">Basic Plan</h5>
                  <div class="pricing__price">
                    <span class="pricing__currency">$</span><span>79,99</span><span
                      class="pricing__time">/Monthly</span>
                  </div>
                </div><!-- /.pricing__header  -->
                <div class="pricing__content">
                  <p class="pricing__desc">Fast project turnaround time, substantial cost savings & quality
                    standards.
                  </p>
                  <ul class="pricing__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Full Social Profiles</li>
                    <li>500 Search Results </li>
                  </ul>
                </div><!-- /.pricing__content  -->
              </div>
              <div class="pricing__footer">
                <a href="#" class="btn btn__primary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #3-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item d-flex flex-column justify-content-between">
              <div>
                <div class="pricing__top">For Big Teams And Enterprise</div>
                <div class="pricing__header">
                  <h5 class="pricing__title">Advanced Plan</h5>
                  <div class="pricing__price">
                    <span class="pricing__currency">$</span><span>99,99</span><span
                      class="pricing__time">/Monthly</span>
                  </div>
                </div><!-- /.pricing__header  -->
                <div class="pricing__content">
                  <p class="pricing__desc">Fast project turnaround time, substantial cost savings & quality
                    standards.
                  </p>
                  <ul class="pricing__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Basic Quota </li>
                    <li>PDF reports</li>
                    <li>Full Social Profiles</li>
                    <li>500 Search Results </li>
                  </ul>
                </div><!-- /.pricing__content  -->
              </div>
              <div class="pricing__footer">
                <a href="#" class="btn btn__secondary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <p class="text__link text-center mt-10 mb-0">Innovative and Sustainable Solutions,
              <a href="#" class="btn btn__link btn__secondary btn__icon px-0">
                <span>Find Your Solution</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing  -->

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

    <!-- ======================
     Work Process 
    ========================= -->
    <section class="work-process pb-100">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/14.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="sticky-top">
              <div class="tab-content mb-50">
                <div class="tab-pane fade show active" id="tab1">
                  <img src="{{ asset('assets/smart/images/work-process/1.jpg')}}" class="rounded" alt="banner">
                </div>
                <div class="tab-pane fade" id="tab2">
                  <img src="{{ asset('assets/smart/images/work-process/2.jpg')}}" class="rounded" alt="banner">
                </div>
                <div class="tab-pane fade" id="tab3">
                  <img src="{{ asset('assets/smart/images/work-process/3.jpg')}}" class="rounded" alt="banner">
                </div>
                <div class="tab-pane fade" id="tab4">
                  <img src="{{ asset('assets/smart/images/work-process/4.jpg')}}" class="rounded" alt="banner">
                </div>
              </div><!-- /.tab-content -->
              <p class="color-white font-weight-bold fz-16 mb-30">SmartData been helping organizations throughout the
                World to
                manage their IT with our unique approach to technology management and consultancy solutions. </p>
              <a href="#" class="btn btn__white btn__white-style2 btn__icon mb-30">
                <span>Request Demo</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="heading mb-80">
              <h2 class="heading__subtitle">How We Works!!</h2>
              <h3 class="heading__title color-white">Deliver Only Exceptional Quality, And Improve! </h3>
            </div>
            <nav class="nav nav-tabs">
              <!-- process Item #1 -->
              <a class="process-item d-flex flex-wrap active" data-toggle="tab" href="#tab1">
                <div class="process-item__icon">
                  <i class="icon-cyberspace"></i>
                </div><!-- /.process-item__icon -->
                <div class="process-item__content">
                  <h4 class="process-item__title">Brainstorming</h4>
                  <p class="process-item__desc">The first step is to take the projects data & think about to manage all
                    aspects of your software assets including maintenance. Our skilled personnel along with a high-level
                    look at the client’s network and suggestions for strategic direction utilising the latest processing
                    software.</p>
                </div>
              </a><!-- /.process-item -->
              <!-- process Item #2 -->
              <a class="process-item d-flex flex-wrap" data-toggle="tab" href="#tab2">
                <div class="process-item__icon">
                  <i class="icon-algorithm"></i>
                </div><!-- /.process-item__icon -->
                <div class="process-item__content">
                  <h4 class="process-item__title">Concept Prototype</h4>
                  <p class="process-item__desc">To know about the product, customers & competitors offer integral
                    communication services software assets. Our skilled personnel, utilising the latest processing
                    software, combined with decades of experience. Once the critical situation resolved, work on the ITA
                    roadmap resumed.</p>
                </div>
              </a><!-- /.process-item -->
              <!-- process Item #3 -->
              <a class="process-item d-flex flex-wrap" data-toggle="tab" href="#tab3">
                <div class="process-item__icon">
                  <i class="icon-programming3"></i>
                </div><!-- /.process-item__icon -->
                <div class="process-item__content">
                  <h4 class="process-item__title">Design Layout</h4>
                  <p class="process-item__desc">Start to work on the design taking with collected data, we're
                    responsible
                    for our process and results. Skilled personnel, utilising the latest processing software, combined
                    with decades of experience about the product & competitors offer integral communication services.
                  </p>
                </div>
              </a><!-- /.process-item -->
              <!-- process Item #4 -->
              <a class="process-item d-flex flex-wrap" data-toggle="tab" href="#tab4">
                <div class="process-item__icon">
                  <i class="icon-browser"></i>
                </div><!-- /.process-item__icon -->
                <div class="process-item__content">
                  <h4 class="process-item__title">Evaluation</h4>
                  <p class="process-item__desc">Reach a conclusion from the investigations about product and we thank
                    each
                    of our great clients projects, latest software, combined with decades of experience.</p>
                </div>
              </a><!-- /.process-item -->
            </nav>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ======================
       FAQ
    ========================= -->
    <section class="faq pt-120 pb-70">
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

@endsection