@extends('layouts.front')
@section('content')


    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout15 mt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <nav>
              <ol class="breadcrumb mb-20">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="projects-grid.html">projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Financial’s Need For Strategic Advisor</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Financial’s Need For Strategic Advisor</h1>
            <p class="pagetitle__desc">Our security services can help ensure your business Trusted by the world's best
              organizations. You need information security services to proactively prevent and protect confidential
              data.</p>
          </div><!-- /.col-xl-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-1">
            <ul class="portfolio__meta-list list-unstyled d-flex flex-wrap">
              <li>
                <h5 class="portfolio__meta-title">Client</h5>
                <span class="portfolio__meta-items">Optime Logistics</span>
              </li>
              <li>
                <h5 class="portfolio__meta-title">Industry</h5>
                <span class="portfolio__meta-items">Cargo, Logistics, Trucking, Shipping</span>
              </li>
              <li>
                <h5 class="portfolio__meta-title">Services</h5>
                <span class="portfolio__meta-items">Consulting, Management, Security, Support</span>
              </li>
            </ul>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     portfolio single
    ========================= -->
    <section class="portfolio-single py-0">
      <div class="contain-fluid px-0">
        <div class="portfolio__img">
          <img src="{{ asset('assets/smart/images/portfolio/single/1.jpg')}}" alt="portfolio img">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="portfolio-item text-center mb-0">
              <div class="portfolio__icon mb-0 mx-auto">
                <i class="icon-mouse"></i>
              </div>
            </div><!-- /.portfolio-item  -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio single -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="text-content pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="heading mb-80">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Overview</h2>
              </div>
              <h3 class="heading__title">Easy solutions for all difficult IT problems to ensure availability to hundreds
                of IT advisors, users, and business owners.
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
        <div class="text__block-content row">
          <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1">
            <p class="text__block-desc">You need information security services to proactively prevent and protect
              confidential data, as well as detect internal and external threats. Protect your business by
              choosing managed security service provider. Our security services can help ensure your business
              Trusted by the world's best organizations.</p>
            <p class="text__block-desc">To help implement the plan’s recommendations and carry out further strategic
              consulting, we provided a tailored managed IT services plan. By having a concrete document that both
              Dataprise and our client’s leadership can reference, both sides of the partnership are equally informed
              and kept up-to-date on current and upcoming steps.</p>
            <p class="text__block-desc">We were able to immediately assist with the client’s emergency. Thanks to our
              team, a new solution was quickly scoped and implemented. Once the critical situation was resolved, work on
              the ITA roadmap resumed.</p>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-1">
            <p class="text__block-desc">Provide users with appropriate view and access permissions to requests,
              problems, changes, contracts, assets, solutions, and reports with our experienced professionals.
            </p>
            <p class="text__block-desc">Easy solutions for all difficult IT problems to ensure availability to
              hundreds of IT advisors, users, and business </p>
            <a href="#" class="btn btn__primary btn__icon btn__xl mt-30">
              <span>Visit Website</span><i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <!-- =========================
           Banner layout 6
    =========================== -->
    <section class="banner-layout6 pb-0">
      <div class="banner-bg">
        <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/1.jpg')}}" alt="background"></div>
      </div>
      <div class="container">
        <div class="row heading heading-light mb-60">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="divider divider-primary mb-20"></div>
            <h3 class="heading__title">Provides consultative approach on emerging technology. </h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="row">
              <div class="col-sm-6">
                <p class="heading__desc">As one of the world's largest ITService Providers with over 120 engineers and
                  IT support staff are ready to help.</p>
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <p class="heading__desc">SmartData been helping organizations and Providers through the World to manage
                  their IT with our unique approach to technology management and consultancy solutions. </p>
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
          <div class="col-12">
            <img src="{{ asset('assets/smart/images/banners/11.jpg')}}" alt="banner">
            <div class="video__btn-wrapper">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title">Watch Our Presentation!</span>
              </a>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 6 -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="text-content pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="heading mb-80">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Challenge</h2>
              </div>
              <h3 class="heading__title">We were able to immediately assist with the client’s emergency, a new solution
                was implemented.
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
        <div class="text__block-content row">
          <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1">
            <p class="text__block-desc">The report provided to the client covered all of the topics in our standard ITA,
              along with a high-level look at the client’s network and suggestions for strategic direction. To help
              implement the plan’s recommendations and carry out further strategic consulting, we provided a tailored
              managed IT services plan.</p>
            <p class="text__block-desc">By having a concrete document that both Dataprise and our client’s leadership
              can reference, both sides of the partnership are equally informed and kept up-to-date on current and
              upcoming steps.</p>
            <p class="text__block-desc">We were able to immediately assist with the client’s emergency. Thanks to our
              team, a new solution was quickly scoped and implemented. Once the critical situation was resolved, work on
              the ITA roadmap resumed.</p>
            <p class="text__block-desc">Provide users with appropriate view and access permissions to requests,
              problems, changes, contracts, assets, solutions, and reports with our experienced professionals. </p>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-1">
            <p class="text__block-desc">Easy solutions for all difficult IT problems to ensure availability to hundreds
              of IT advisors, users, and business owners.</p>
            <p class="text__block-desc">Thanks to our team, a new solution was quickly scoped and implemented. Once the
              critical situation was resolved, work resumed.</p>
            <ul class="list-items list-unstyled">
              <li>450,000 client’s interactions </li>
              <li>Help challenge critical activities</li>
              <li>Simplify & Automate Workflows</li>
              <li>Peer perspectives and advice</li>
            </ul>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <!-- ========================
     Counters
    =========================== -->
    <section class="counters pt-0">
      <div class="container">
        <div class="row">
          <!-- counter item #1 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter__desc">Projects And Software Developed in 2021</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #2 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter__desc">Qualified Employees And Developers With Us</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #3 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter__desc">Satisfied Clients We Have Served Globally</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">0,25</h4>
              <p class="counter__desc">Years Of Experience In The IT & Software Industry</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Counters -->

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
     Text Content
    ========================= -->
    <section class="text-content pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="heading mb-80">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Results</h2>
              </div>
              <h3 class="heading__title">Improve efficiency, leverage tech & provide better experiences with the modern
                technology services!!
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
        <div class="text__block-content row mb-80">
          <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1">
            <p class="text__block-desc">The report provided to the client covered all of the topics in our standard ITA,
              along with a high-level look at the client’s network and suggestions for strategic direction. To help
              implement the plan’s recommendations and carry out further strategic consulting, we provided a tailored
              managed IT services plan.</p>
            <p class="text__block-desc">By having a concrete document that both Dataprise and our client’s leadership
              can reference, both sides of the partnership are equally informed and kept up-to-date on current and
              upcoming steps.</p>
            <p class="text__block-desc">We were able to immediately assist with the client’s emergency. Thanks to our
              team, a new solution was quickly scoped and implemented. Once the critical situation was resolved, work on
              the ITA roadmap resumed.</p>
            <p class="text__block-desc">Provide users with appropriate view and access permissions to requests,
              problems, changes, contracts, assets, solutions, and reports with our experienced professionals. </p>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-1">
            <p class="text__block-desc">Easy solutions for all difficult IT problems to ensure availability to hundreds
              of IT advisors, users, and business owners.</p>
            <p class="text__block-desc">Thanks to our team, a new solution was quickly scoped and implemented. Once the
              critical situation was resolved, work resumed.</p>
            <a href="#" class="btn btn__primary btn__icon btn__xl">
              <span>Download Case Study</span> <i class="far fa-file-alt"></i>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class="row">
              <div class="col-sm-12 col-md-4 col-lg-4">
                <h5 class="fz-16">Design</h5>
                <ul class="list-items list-items-layout2 list-unstyled mb-40">
                  <li>Branding</li>
                  <li>Design system</li>
                  <li>Style exploration</li>
                  <li>User experience design</li>
                  <li>User interface design</li>
                </ul>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <h5 class="fz-16">Exploration</h5>
                <ul class="list-items list-items-layout2 list-unstyled mb-40">
                  <li>Feature improvements</li>
                  <li>Information architecture</li>
                  <li>Q&A sessions</li>
                  <li>User research</li>
                </ul>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <h5 class="fz-16">Development</h5>
                <ul class="list-items list-items-layout2 list-unstyled mb-40">
                  <li>Front-end development</li>
                  <li>Responsive development</li>
                  <li>WordPress development</li>
                </ul>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <section class="py-0">
      <div class="bordered-box">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="row row-no-gutter ">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                  <div class="blog-share d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Share</strong>
                    <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                  </div><!-- /.blog-share -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                  <div class="blog-tags d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Tags</strong>
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                      <li><a href="#">Consulting</a></li>
                      <li><a href="#">Tech</a></li>
                      <li><a href="#">Employee</a></li>
                      <li><a href="#">Organization</a></li>
                    </ul>
                  </div><!-- /.blog-tags -->
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.bordered-box -->
    </section>

    <section class="pt-40 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="widget-nav d-flex justify-content-between">
              <div class="widget-nav__prev">
                <a href="#" class="d-flex flex-wrap">
                  <div class="widget-nav__img">
                    <img src="{{ asset('assets/smart/images/blog/grid/4.jpg')}}" alt="blog thumb">
                  </div>
                  <div class="widget-nav__content">
                    <span>Previous Post</span>
                    <h5 class="fz-16 mb-0">Succession Risks Threaten Leadership Strategy</h5>
                  </div>
                </a>
              </div><!-- /.blog-prev  -->
              <a href="#" class="widget-nav__all"><i class="fa fa-th-large"></i></a>
              <div class="widget-nav__next">
                <a href="#" class="d-flex flex-wrap">
                  <div class="widget-nav__content">
                    <span>Next Post</span>
                    <h5 class="fz-16 mb-0">Employee Engagement Surveys Tell About Employee?</h5>
                  </div>
                  <div class="widget-nav__img">
                    <img src="{{ asset('assets/smart/images/blog/grid/6.jpg')}}" alt="blog thumb">
                  </div>
                </a>
              </div><!-- /.blog-next  -->
            </div><!-- /.widget-nav -->
          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

   @endsection