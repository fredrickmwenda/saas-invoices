@extends('layouts.front')
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout3 bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/3.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Leadership</h1>
            <p class="pagetitle__desc">Our team provides a consultative approach on emerging technology, experienced
              professionals who understand that true partners who care about your success.
            </p>
            <div class="d-flex align-items-center">
              <a href="contact-us.html" class="btn btn__white mr-30">Contact Us</a>
              <a href="request-quote.html" class="btn btn__white btn__bordered btn__icon">
                <span>Get Started</span><i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leadership</li>
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
              <a href="leadership-team.html" class="nav__link active">Leadership Team</a>
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
        Team layout 1
    ========================== -->
    <section class="team-layout1 text-center pb-40">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/1.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons  justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Mike Dooley</h5>
                <p class="member__desc">Chief Executive</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/2.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Michael Brian</h5>
                <p class="member__desc">Managing Director</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/3.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Chris Wensel</h5>
                <p class="member__desc">Vice President</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/4.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Richard Muldoone</h5>
                <p class="member__desc">Legal Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/5.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons  justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Maria Andaloro</h5>
                <p class="member__desc">HR Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/6.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Marian Chris</h5>
                <p class="member__desc">Global Sales</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{ asset('assets/smart/images/team/7.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Jack Mudson</h5>
                <p class="member__desc">Manager</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 1  -->
@endsection

 