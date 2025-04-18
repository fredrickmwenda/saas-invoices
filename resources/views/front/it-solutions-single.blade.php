@extends('layouts.front')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/smart/css/animate.css')}}">
<style>
.sidebar_search form {
    border-radius: 10px;
    border: 1px solid rgba(9, 9, 25, 0.10);
    background: var(--colorWhite);
    overflow: hidden;
    position: relative;
}
.sidebar_search input {
    border: none;
    width: 100%;
    padding: 12px 20px;
    outline: none;
    resize: none;
    background: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 300;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

.sidebar_search button {
    position: absolute;
    background: var(--colorPrimary);
    top: 0;
    right: 0;
    width: 48px;
    height: 100%;
    border-radius: 10px;
    color: var(--colorWhite);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

.sidebar_category ul li a {
    display: block;
    width: 100%;
    border-radius: 10px;
    border: 1px solid rgba(9, 9, 25, 0.10);
    color: var(--colorBlack);
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    position: relative;
    padding: 15px 20px;
    margin-top: 20px;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

.sidebar_category ul li a::after {
    position: absolute;
    content: "\f061";
    font-family: "font awesome 5 free";
    font-size: 14px;
    font-weight: 600;
    background: #fff2f2;
    padding: 4px 16px;
    border-radius: 30px;
    top: 50%;
    right: 20px;
    transition: all linear .3s;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

.sidebar_contact {
    position: relative;
    height: 500px;
    border-radius: 10px;
    overflow: hidden;
}

.sidebar_contact .text {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: 'white';
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 65px;
}

.common_btn {
    color: var(--colorWhite);
    text-align: center;
    font-family: var(--headingFont);
    font-size: 16px;
    font-weight: 500;
    line-height: 26px;
    text-transform: uppercase;
    padding: 15px 30px;
    background: #d90d32;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}

</style>
@endpush
@section('content')


<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout9 bg-overlay bg-overlay-gradient bg-parallax">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/9.jpg')}}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
        <h1 class="pagetitle__heading">Software Dev Services</h1>
        <p class="pagetitle__desc">With shorter product cycles, innovation, and mergers contributing to constant
          change, you are faced making business decisions every day.
        </p>
        <div class="d-flex align-items-center flex-wrap">
          <a href="request-quote.html" class="btn btn__white btn__icon mr-30">
            <span>Get Started</span><i class="icon-arrow-right"></i>
          </a>
          <a class="video__btn video__btn-rounded video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
            <div class="video__player">
              <i class="fa fa-play"></i>
            </div>
            <span class="video__btn-title color-white">Our Video!</span>
          </a>
        </div>
        <nav>
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="it-solutions.html">IT Solutions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Software Dev</li>
          </ol>
        </nav>
      </div><!-- /.col-xl-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
      Secondary Nav
    =========================== -->
<section class="secondary-nav secondary-nav-internal-navigation sticky-top py-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="nav nav-tabs justify-content-center">
          <a href="#" data-scroll="about" class="nav__link">Overview</a>

          <!-- <a href="#" data-scroll="pricing" class="nav__link">Pricing & Plans</a> -->
          <a href="#" data-scroll="banner1" class="nav__link">Request A Quote </a>
          <a href="#" data-scroll="faqs" class="nav__link">Help & FAQs</a>
        </nav>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Secondary Nav -->

<!-- ========================
      About Layout 3
    =========================== -->


<section class="services_details pt_120 xs_pt_80 pb-20 xs_pb_80" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                    <div class="services_details_area">
                        <div class="services_details_img">
                        
                            <img src="{{asset('assets/smart/images/service_details_img_large.jpg')}}" alt="service" class="img-fluid w-100">
                        </div>
                        <div class="services_details_text">
                            <h2>Graphic Design</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration is
                                in some form, by injected humour, or randomised words which don't look even slightly
                                believable. If you are a
                                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                embarrassing hidden in the
                                middle of text. There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffe
                                red alteration in some form, by injected humour.</p>
                            <ul>
                                <li>If you are a going to use a passage of Lorem Ipsum, you need to be sure there</li>
                                <li>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have</li>
                                <li> passages of Lorem Ipsum available, but the majority have suffered alteration is in
                                    some form</li>
                                <li>There are many variations of passages of Lorem Ipsum available</li>
                            </ul>
                            <span class="quot_text">“There are many variations of passages of Lorem Ipsum available, but
                                the majority
                                have suffered alteration in some form, by variations of passages”</span>
                            <p>Are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration is there
                                in some form, by injected humour, or randomised words which don't look even slightly
                                believable. If you are a
                                going to use a passage of Lorem Ipsum</p>
                          
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" style="position: relative; visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">
                    <div  style="">
                        <!-- <div class="sidebar_search">
                            <h3>Search</h3>
                            <form action="#">
                                <input type="text" placeholder="Search..." class="sidebar_search input">
                                <button type="submit" class="sidebar_search button"><i class="far fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> -->
                        <div class="sidebar_category mt_60">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">UI/UX Design</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Product Branding</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_contact mt-60">
                            <img src="{{asset('assets/smart/images/sidebar_contact_img.jpg')}}" alt="contact" class="img-fluid w-100">
                            <div class="text">
                                <i class="far fa-plus" aria-hidden="true"></i>
                                <h4>Any Problem  Contact Us</h4>
                                <a class="common_btn" href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="sticky_sidebar" class="sidebar jquery-stickit-spacer" style="height: 1114px; visibility: hidden !important;"></div> -->
                </div>
            </div>
        </div>
    </section>









<!-- =========================
       Banner layout 1
      =========================== -->
<section id="banner1" class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/5.jpg')}}" alt="background"></div>
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
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
          </div>
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
            
            <div class="testimonial-item">
              <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                chance to make an
                impact, you’ve come to the right place. We will transform your business through our techniques!
              </p>
              <div class="testimonial__meta">
                <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                <p class="testimonial__meta-desc">Digital Media Manager</p>
              </div>
            </div>
           
            <div class="testimonial-item">
              <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                make an impact, you’ve come to the right place. We will transform your business through our
                techniques! </p>
              <div class="testimonial__meta">
                <h4 class="testimonial__meta-title">John Peter</h4>
                <p class="testimonial__meta-desc">7oroof Inc</p>
              </div>
            </div>
           
            <div class="testimonial-item">
              <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                chance to make an
                impact, you’ve come to the right place. We will transform your business through our techniques!
              </p>
              <div class="testimonial__meta">
                <h4 class="testimonial__meta-title">Ayman</h4>
                <p class="testimonial__meta-desc">7oroof Inc</p>
              </div>
            </div>
            
            <div class="testimonial-item">
              <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                make an impact, you’ve come to the right place. We will transform your business through our
                techniques! </p>
              <div class="testimonial__meta">
                <h4 class="testimonial__meta-title">John Peter</h4>
                <p class="testimonial__meta-desc">7oroof Inc</p>
              </div>
            </div>
            
            <div class="testimonial-item">
              <p class="testimonial__desc color-white">My project was a simple & small task, but the
                persistence and
                determination turned it into an awesome and great project which make me happy .
              </p>
              <div class="testimonial__meta">
                <h4 class="testimonial__meta-title">John Peter</h4>
                <p class="testimonial__meta-desc">7oroof Inc</p>
              </div>
            </div>
          </div>
          <div class="slider-nav">
            <div class="testimonial__thumb">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/1.png')}}" alt="author thumb">
            </div>
            <div class="testimonial__thumb">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/2.png')}}" alt="author thumb">
            </div>
            <div class="testimonial__thumb">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/3.png')}}" alt="author thumb">
            </div>
            <div class="testimonial__thumb">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/2.png')}}" alt="author thumb">
            </div>
            <div class="testimonial__thumb">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/3.png')}}" alt="author thumb">
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="contact-panel">
          <form class="contact-panel__form" method="post" action="{{ asset('assets/php/contact.php')}}" id="contactForm">
            <div class="row">
              <div class="col-12">
                <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                <p class="contact-panel__desc mb-30">Our deep pool of certified engineers and IT staff are ready to
                  help you to keep your IT business safe & ensure high availability.</p>
              </div> 
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name" required>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <select class="form-control">
                    <option value="0">Inquiry</option>
                    <option value="1">IT Management Services 2</option>
                    <option value="2">IT Management Services 3</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Additional Details!" id="contact-message" name="contact-message"></textarea>
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
       FAQ
    ========================= -->
<section id="faqs" class="faq pt-120 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-50">
          <!-- <h2 class="heading__subtitle">Our Pricing Features</h2> -->
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