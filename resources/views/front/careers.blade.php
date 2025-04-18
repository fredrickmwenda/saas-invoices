@extends('layouts.front')
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/7.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Careers</h1>
            <p class="pagetitle__desc">Trusted by the world's best organizations, for 21 years and running, it has been
              delivering smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
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
              <a href="awards.html" class="nav__link">Awards & Recognition</a>
              <a href="pricing.html" class="nav__link">Pricing & Plans</a>
              <a href="faqs.html" class="nav__link">Help & FAQs</a>
              <a href="careers.html" class="nav__link active">Careers</a>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================= 
         careers
    =========================  -->
    <section class="careers">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle color-body">We Prepare For The Future.</h2>
              <h3 class="heading__title">Inspire And Get Inspired By Professional Experts</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <!-- career item #1 -->
            <div class="job-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="job-item__meta">
                    <span class="job-item__type">Full Time</span>
                    <span class="job-item__location">New York</span>
                  </div>
                  <h4 class="job-item__title">Chief Executive Officer</h4>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                  <p class="job-item__desc">A chief executive officer (CEO) is the highest-ranking executive in a
                    company, and their primary responsibilities include making major corporate decisions.</p>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                  <a href="#" class="btn btn__secondary btn__icon">
                    <span>Apply Now</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.job-item -->
            <!-- career item #2 -->
            <div class="job-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="job-item__meta">
                    <span class="job-item__type">Full Time</span>
                    <span class="job-item__location">San Francisco</span>
                  </div>
                  <h4 class="job-item__title">Chief Financial Officer</h4>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                  <p class="job-item__desc">A chief executive officer (CEO) is the highest-ranking executive in a
                    company, and their primary responsibilities include making major corporate decisions.</p>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                  <a href="#" class="btn btn__secondary btn__icon">
                    <span>Apply Now</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.job-item -->
            <!-- career item #3 -->
            <div class="job-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="job-item__meta">
                    <span class="job-item__type">Full Time</span>
                    <span class="job-item__location">New York</span>
                  </div>
                  <h4 class="job-item__title">Global Sales & Marketing</h4>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                  <p class="job-item__desc">A chief executive officer (CEO) is the highest-ranking executive in a
                    company, and their primary responsibilities include making major corporate decisions.</p>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                  <a href="#" class="btn btn__secondary btn__icon">
                    <span>Apply Now</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.job-item -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.careers -->

    <!-- ======================
    History Timeline
    ========================= -->
    <section class="history-timeline pb-0">
      <div class="history-timeline-bg">
        <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/1.jpg')}}" alt="background"></div>
      </div>
      <div class="container">
        <div class="row heading mb-50">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="d-flex align-items-center mb-20">
              <div class="divider divider-primary mr-30"></div>
              <h2 class="heading__subtitle mb-0">Explore Our Great History!!</h2>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h3 class="heading__title color-white">One of the world's largest IT Providers since 2005.</h3>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="position-relative">
        <div class="timeline-bar">
          <div class="container d-flex">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
          </div><!-- /.container -->
        </div><!-- /.timeline-bar -->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="timeline-carousel-wrapper mb-70">
                <div class="slick-carousel carousel-arrows-light"
                  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                  <div class="carousel-block">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #1 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/1.jpg')}}" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Our support works around the clock to ensure your work is
                              secure and monitored safely access to over 99 IT professionals working to help you
                            </p>
                            <h4 class="timeline__year mb-0">2005</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #2 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/2.jpg')}}" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Providing consulting expertise on a specific technology,
                              strategizing on IT, providing a security assessment, or managing IT infrastructure.
                            </p>
                            <h4 class="timeline__year mb-0">2010</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #3 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2015</h4>
                            <p class="timeline__desc">We partner with you to enable your technology so you mfocus
                              on
                              your organization’s mission leverage our talent, and creativity.
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/3.jpg')}}" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #4 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2020</h4>
                            <p class="timeline__desc">Our people are held to the highest level accountability to
                              ensure you are always satisfied with your results and commitment
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/4.jpg')}}" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div><!-- /.carousel-block -->
                  <div class="carousel-block">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #1 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2015</h4>
                            <p class="timeline__desc">We partner with you to enable your technology so you mfocus
                              on
                              your organization’s mission leverage our talent, and creativity.
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/3.jpg')}}" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #2 -->
                        <div class="timeline-item row">
                          <div class="timeline__content col-sm-6">
                            <h4 class="timeline__year">2020</h4>
                            <p class="timeline__desc">Our people are held to the highest level accountability to
                              ensure you are always satisfied with your results and commitment
                            </p>
                          </div>
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/4.jpg')}}" alt="timeline">
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #3 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/1.jpg')}}" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Our support works around the clock to ensure your work is
                              secure and monitored safely access to over 99 IT professionals working to help you
                            </p>
                            <h4 class="timeline__year mb-0">2005</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- timeline Item #4 -->
                        <div class="timeline-item row align-items-end">
                          <div class="timeline__img col-sm-6">
                            <img src="{{ asset('assets/smart/images/timeline/2.jpg')}}" alt="timeline">
                          </div>
                          <div class="timeline__content col-sm-6">
                            <p class="timeline__desc">Providing consulting expertise on a specific technology,
                              strategizing on IT, providing a security assessment, or managing IT infrastructure.
                            </p>
                            <h4 class="timeline__year mb-0">2010</h4>
                          </div>
                        </div><!-- /.timeline-item -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div><!-- /.carousel-block -->
                </div><!-- /.carousel -->
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
            <div class="row row-no-gutter read-note">
              <div class="col-sm-4">
                <div class="rating mb-10">
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                </div>
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-8">
                <p class="read-note__text color-white">
                  <span class="font-weight-bold text-underlined">99.9% Customer Satisfaction</span>
                  based on 750+ reviews and 20,000 Objective Resource
                </p>
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <p class="mb-30 font-weight-bold sub__desc">As one of the world's largest ITService Providers with over
                  120
                  engineers and IT support staff are ready to help.</p>
                <a href="#" class="btn btn__primary btn__bordered btn__icon mb-30">
                  <span>Request Demo</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.col-sm-6 -->
              <div class="col-sm-12 col-md-6">
                <ul class="list-items list-unstyled mb-30">
                  <li>450,000 client’s interactions </li>
                  <li>Help challenge critical activities</li>
                  <li>Simplify & Automate Workflows</li>
                  <li>Peer perspectives and advice</li>
                </ul>
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="{{ asset('assets/smart/images/banners/3.jpg')}}" alt="banner">
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.History Timeline -->

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