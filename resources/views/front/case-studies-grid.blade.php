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
      portfolio Grid
    ============================= -->
    <section class="portfolio-grid">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
              <li><a class="filter active" href="#" data-filter="all">ALL</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Consulting">Consulting</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Support">Support</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Security">Security</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Software">Software</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Management">Management</a></li>
              <li><a class="filter" href="#" data-filter=".filter-Cloud">Cloud</a></li>
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
          <!-- portfolio item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/1.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Consulting">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/2.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Security">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/3.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Software">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/4.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Management">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/5.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Cloud">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{ asset('assets/smart/images/portfolio/grid/6.jpg')}}" alt="portfolio img">
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
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center mb-0">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid  -->
@endsection
    <!-- ========================
      Footer
    ========================== -->
