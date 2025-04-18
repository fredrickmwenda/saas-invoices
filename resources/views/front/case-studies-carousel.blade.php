@extends('layouts.front')
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout13 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/11.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Case Studies</h1>
            <p class="pagetitle__desc">Our resource center that is designed to give you valuable insight on how
              technology can help your business win and give you a competitive advantage.
            </p>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Awards</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      portfolio carousel 
    ============================= -->
    <section class="portfolio-carousel">
      <div class="container">
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

 @endsection