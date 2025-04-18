@extends('layouts.front')
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout12 text-center bg-overlay bg-overlay-gradient bg-parallax">
  <div class="bg-img"><img src="{{ asset('assets/smart/Data/quotation1.jpg')}}" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
        <h1 class="pagetitle__heading">Request A Quote</h1>
        <p class="pagetitle__desc">
        As one of the world's largest IT service providers, we deliver cutting-edge technology solutions and services that empower businesses to innovate, streamline operations, and achieve their strategic goals.
        </p>
        <a class="video__btn video__btn-rounded video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
          <div class="video__player">
            <i class="fa fa-play"></i>
          </div>
        </a>
      </div><!-- /.col-xl-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->


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
          <p class="mb-30">Servoll Technologies has been helping organizations throughout the World to manage
            their IT with our unique approach to technology management and consultancy solutions with appropriate
            view and permissions to requests, problems, changes, contracts, assets..</p>
          <p class="mb-30">You need information security services to proactively prevent and protect confidential
            data, as well as detect internal and external threats. Protect your business by choosing managed
            security service provider. Our security services can help ensure your business Trusted by the world's
            best organizations.</p>
          <p class="mb-30"> Easy solutions for all difficult IT problems to ensure high
            availability.</p>
          <p class="mb-30">Provide users with appropriate view and access permissions to requests, problems,
            changes, contracts, assets, solutions, and reports with our experienced professionals. </p>
          <ul class="list-items list-items-layout2 list-unstyled d-flex flex-wrap list-horizontal mb-50">
            <li>Structure Data & Docs</li>
            <li>SEO Friendly</li>
            <li>Drive Business Process</li>
            <li>Speed Up Transactions</li>
            <li>Cost Friendly Prices</li>
            <li>Dedicated Support</li>
          </ul>

          <!-- <img src="{{ asset('assets/smart/images/about/singnture.png')}}" alt="singnture"> -->
        </div>
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
        <div class="about__img mb-40">
          <img src="{{ asset('assets/smart/Data/about1.jpg')}}" alt="about">
          <blockquote class="blockquote d-flex align-items-end mb-0">
            <div class="blockquote__avatar">
              <img src="{{ asset('assets/smart/images/testimonials/thumbs/1.png')}}" alt="thumb">
            </div>
            <div class="blockquote__content">
              <h4 class="blockquote__title mb-0">As one of the world's largest IT service providers, we deliver cutting-edge technology solutions and services that empower businesses to reach their goals
              </h4>
            </div><!-- /.blockquote__content -->
          </blockquote><!-- /.blockquote -->
        </div><!-- /.about-img -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.About Layout 1 -->

<!-- =========================
       Banner layout 2
      =========================== -->
<section class="banner-layout2 pb-0 bg-overlay bg-overlay-primary">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/8.jpg')}}" alt="background"></div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="contact-panel">
        <form class="contact-panel__form" method="post" id="inquiryForm">
            @csrf
            <div class="row">
              <div class="col-12">
                <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                <p class="contact-panel__desc mb-30">We are equipped to aid you in safeguarding your business's technological assets and maintaining optimal operational continuity.</p>
              </div> <!-- /.col-12 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name" required>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <select class="form-control" name="service_id">
                    <option>Service Inquiry</option>

                    <option value="structured-cabling">Structured Cabling</option>
                    <option value="software-development">Software Development</option>
                    <option value="web-design">Web Design</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="ui-ux">UI/UX Design</option>
                    <option value="mobile-apps">Mobile Apps</option>
                    <option value="apis-integration">Apis Integration</option>
                    <option value="it-support">IT Support</option>
                    <option value="it-consultancy">IT Consultancy</option>
                    <option value="web-hosting">Web Hosting</option>
                    <option value="domains">Domains</option>
                    <option value="cctv-installation">CCTV Installation</option>
                    <option value="hardware-security">Hardware Security</option>
                    <option value="domain-selling">Domain Selling</option>
                    <option value="alarm-security">Alarm Security</option>

                  </select>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone">
                </div>
              </div><!-- /.col-lg-6 -->
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
</section><!-- /.Banner layout 2 -->



@endsection