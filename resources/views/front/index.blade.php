@extends('layouts.front')
@section('content')
 
<!-- ============================
        Slider
    ============================== -->
<section class="slider">
  <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
    <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
      <div class="bg-img"><img src="{{ asset('assets/smart/Data/sliders1.jpg')}}" alt="slide img"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <h2 class="slide__title">We Run All Kinds Of IT Services That Vow Your Success</h2>
              <p class="slide__desc">Unleash Your Success Potential with Our Range of Premium IT Services. Don't Settle for Less, Choose the Best!</p>
              <a href="{{route('about')}}" class="btn btn__primary btn__icon mr-30">
                <span>More About Us</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="{{route('services')}}" class="btn btn__white">Our Services</a>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->
    <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
      <div class="bg-img"><img src="{{ asset('assets/smart/Data/sliders2.jpg')}}" alt="slide img"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="slide__content">
              <h2 class="slide__title">Revolutionalize Societal Problems using Tech.</h2>
              <p class="slide__desc">Lets tune that brilliant, minds boogling idea into a reality. Partner with us for guaranteed success!</p>
              <a href="{{route('about')}}" class="btn btn__primary btn__icon mr-30">
                <span>More About Us</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="{{route('services')}}" class="btn btn__white">Our Services</a>
            </div><!-- /.slide-content -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.slide-item -->
  </div><!-- /.carousel -->
</section><!-- /.slider -->

<!-- ========================
      About Layout 4
    =========================== -->
<section class="about-layout4 pt-130 pb-0">
  <div class="container">
    <div class="row heading">
      <div class="col-12">
        <div class="d-flex align-items-center mb-20">
          <div class="divider divider-primary mr-30"></div>
          <h2 class="heading__subtitle mb-0">About Servoll Technologies</h2>
 
        </div>
      </div><!-- /.col-12 -->
      <div class="col-sm-12 col-md-12 col-lg-6">

         
        <h3 class="heading__title mb-10">Best IT Service Provider!!
        </h3> 
        <div class="about__img">
          <img src="{{ asset('assets/smart/Data/about2.jpg')}}" alt="about">
          </div>
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-12 col-md-12 col-lg-6">
        <p class="itle__desc"> At the heart of Servoll Technologies is our unwavering commitment to excellence, manifested through the delivery of innovative IT solutions that serve as the cornerstone for driving sustained business success.
        By leveraging cutting-edge technology and adhering to industry best practices, we craft tailored IT services that empower organizations to navigate the digital landscape with confidence. 
        Our customer-first philosophy is woven into the fabric of our approach, ensuring that we not only meet but exceed expectations. Beyond the transactional nature of business, we strive to build enduring partnerships with our clients, recognizing that sustained success is built on mutual trust, collaboration, and a shared vision for the future.
        </p>
        <p class="itle__desc"> As a beacon of reliability in the ever-evolving IT landscape, Servoll Technologies stands firm in our belief that quality solutions go hand-in-hand with exceptional service. 
          We pride ourselves on going beyond the conventional, consistently going the extra mile to understand and address the unique challenges our clients face. </p>
        <!-- <p> As a beacon of reliability in the ever-evolving IT landscape, Servoll Technologies stands firm in our belief that quality solutions go hand-in-hand with exceptional service. We pride ourselves on going beyond the conventional, consistently going the extra mile to understand and address the unique challenges our clients face. Our holistic approach extends from software development and web design to graphic design, mobile apps, CCTV installation, structured cabling, and comprehensive IT consulting and support. At Servoll, we don't just deliver solutions; we shape transformative experiences that propel businesses toward enduring success</p> -->
        <div class="btn-wrapper">
        <a href="{{route('about')}}" class="btn btn__secondary btn__bordered btn__icon">
          <span>More About Us</span>
          <i class="icon-arrow-right"></i>
        </a>
      </div>
        <!-- <p>At Servoll Technologies, we are committed to delivering innovative IT solutions that drive business success. We leverage cutting-edge technology and industry best practices to provide tailored IT Services. We believe in building long-term partnerships with our clients, and our customer-first philosophy ensures that we always go the extra mile to deliver quality solutions</p> -->
        <!-- <p>As one of the world's largest ITService Providers,
          we are
          ready to help you to keep your IT business safe & ensure high availability.</p> -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <!-- <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="about__img">
          <img src="{{ asset('assets/smart/Data/about2.jpg')}}" alt="about">
        </div>
        <div class="video__btn-wrapper">
          <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
            <div class="video__player">
              <i class="fa fa-play"></i>
            </div>
            <span class="video__btn-title">Watch Our Presentation!</span>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
        <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">
          <li>Structure Data & Docs</li>
          <li>SEO Friendly</li>
          <li>Drive Business Process</li>
          <li>Speed Up Transactions</li>
          <li>Cost Friendly Prices</li>
          <li>Dedicated Support</li>
        </ul>
        <div class="clients">
          <p class="text__link text-center mb-10">Trusted By The World's
            <a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">Best Organizations</a>
          </p>
          <div class="slick-carousel" data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/4.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/4.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/5.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/5.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/6.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/6.png')}}" alt="client">
            </div>
            <div class="client">
              <img src="{{ asset('assets/smart/images/clients/7.png')}}" alt="client">
              <img src="{{ asset('assets/smart/images/clients/7.png')}}" alt="client">
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>

<!-- ========================
        Services Carousel
    =========================== -->
<section class="services-layout2 services-carousel pt-130 bg-gray">
  <div class="container">
    <div class="row heading mb-40">
      <div class="col-12">
        <div class="d-flex align-items-center">
          <div class="divider divider-primary mr-30"></div>
          <h2 class="heading__subtitle mb-0">Nationwide Service, Global Expertise</h2>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <h3 class="heading__title">Offering the latest software and IT services to our customers!</h3>
      </div><!-- /col-lg-5 -->
      <div class="col-sm-12 col-md-12 col-lg-5">
        <p class="heading__desc">Enhance operational efficiency, harness the power of cutting-edge technology, and elevate the level of customer satisfaction by adopting advanced technology solutions.</p>
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-code"></i>
              </div><!-- /.service__icon -->
              <h4 class="service__title">Software Development</h4>
              <p class="service__desc">Transform your online presence with our comprehensive software development services, covering both backend and frontend aspects, with a collaborative and agile approach, we deliver full-stack web solutions that align perfectly with your business goals, enhancing both functionality and user satisfaction.</p>
              <ul class="list-items list-unstyled mb-30">
                <!-- <li>Backend Development</li>
                <li> Frontend Development </li>
                <li> APIs Integration </li> -->
                <!-- <li>Testing & documenting</li> -->
                <!-- <li>Deployment & maintenance</li> -->
              </ul>
              <!-- {{route('single-service')}} -->
              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-website"></i>
              </div>
              <h4 class="service__title">Web Design</h4>
              <p class="service__desc">Elevate your online presence with our expert web design services. Our creative team combines aesthetics and functionality to craft visually stunning and user-friendly websites. From responsive layouts to intuitive navigation, we ensure a seamless user experience across various devices</p>
              <!-- <ul class="list-items list-unstyled mb-30">
                <li>Web Development</li>
                <li>UI & UX Design</li>
                <li>Graphic Design</li>
              </ul> -->
              <a href="{{route('single-service')}}" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-responsive-design"></i>
              </div><!-- /.service__icon -->
              <h4 class="service__title">Graphic design</h4>
              <p class="service__desc">Transform your ideas into visually compelling realities with our graphic design expertise. From stunning logos and captivating branding materials to engaging marketing collateral and user-friendly interface designs, we excel in delivering visually appealing solutions.</p>
              <ul class="list-items list-unstyled mb-30">
                <!-- <li>Backend Development</li>
                <li> Frontend Development </li>
                <li> APIs Integration </li> -->
                <!-- <li>Testing & documenting</li> -->
                <!-- <li>Deployment & maintenance</li> -->
              </ul>
              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-server"></i>
              </div>
              <h4 class="service__title">Web Hosting </h4>
              <p class="service__desc">Host your website with confidence on our reliable and high-performance web hosting platform. Enjoy fast loading times, secure server environments, and exceptional customer support to ensure your online presence is always accessible and optimized</p>
              <!-- <ul class="list-items list-unstyled mb-30">
                <li>Web Hosting</li>
                <li> Domain Selling</li>
                <li>Web Support</li>
              </ul> -->
              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-internet"></i>
              </div>
              <h4 class="service__title">Domain Selling </h4>
              <p class="service__desc">Explore a vast selection of premium domains for sale on our platform. Elevate your online presence with a memorable and brandable domain name that aligns perfectly with your business or project. Establish a strong and distinctive online identity </p>
              <!-- <ul class="list-items list-unstyled mb-30">
                <li>Web Hosting</li>
                <li> Domain Selling</li>
                <li>Web Support</li>
              </ul> -->
              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
 
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-cloud-computing"></i>
              </div><!-- /.service__icon -->
              <h4 class="service__title">IT Support</h4>
              <p class="service__desc">Experience reliable and prompt IT support with our dedicated team of experts. From troubleshooting technical issues to ensuring seamless operations, we provide responsive assistance to keep your systems running smoothly</p>
              <!-- <ul class="list-items list-unstyled mb-30">
                <li>Hardware & Software Support</li>
                <li>Email Support</li>
                <li>Software's Configuration</li>
              </ul> -->
              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.service-content -->
          </div><!-- /.service-item -->
          <!-- service item #4 -->
          <div class="service-item">
            <div class="service__content">
              <div class="service__icon">
                <i class="icon-permission"></i>
              </div><!-- /.service__icon -->
              <h4 class="service__title">IT Consulting </h4>
              <p class="service__desc">Elevate your business's technology landscape with our expert IT consulting services. We offer strategic guidance, innovative solutions, and tailored recommendations to optimize your IT infrastructure </p>

              <a href="#" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.service-content -->
          </div><!-- /.service-item -->
          <!-- service item #5 -->


        </div><!-- /.carousel -->
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-12 btn-wrapper">
        <a href="{{route('services')}}" class="btn btn__secondary btn__bordered btn__icon">
          <span>Explore All Services</span>
          <i class="icon-arrow-right"></i>
        </a>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Services Layout 2 -->

<!-- ======================
    Features Layout 1
    ========================= -->
<!-- <section class="features-layout1 pb-0">
      <div class="features-bg">
        <div class="bg-img"><img src="{{ asset('assets/smart/images/backgrounds/14.jpg')}}" alt="background"></div>
      </div>
      <div class="container">
        <div class="row heading heading-light mb-30">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="divider divider-primary mb-20"></div>
            <h3 class="heading__title">Provides consultative approach on emerging technology. </h3>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="row">
              <div class="col-sm-6">
                <p class="heading__desc">As one of the world's largest ITService Providers with over 120 engineers and
                  IT support staff are ready to help.</p>
                <a href="#" class="btn btn__primary btn__primary-style2 btn__icon mt-30 mb-30">
                  <span>Our Pricing</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
              <div class="col-sm-6">
                <p class="heading__desc">SmartData been helping organizations and Providers through the World to manage
                  their IT with our unique approach to technology management and consultancy solutions. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-software"></i>
              </div>
              <h4 class="feature__title">Software Asset</h4>
              <p class="feature__desc">All aspects of your software assets including purchasing, deployment &
                maintenance.</p>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-dos"></i>
              </div>
              <h4 class="feature__title">Privileged Access</h4>
              <p class="feature__desc">Extend proven Tech best practices to HR, finance, and other service delivery
                areas.</p>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-operating-system"></i>
              </div>
              <h4 class="feature__title">Software License</h4>
              <p class="feature__desc">Build dynamic request templates with associated workflows, and tasks.</p>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item text-center">
              <div class="feature__icon">
                <i class="icon-machine-learning"></i>
              </div>
              <h4 class="feature__title">Enterprise Service</h4>
              <p class="feature__desc">Our technology allows you to offer the latest software to your possible
                customers!</p>
              <a href="#" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
            </div>
          </div>
        </div>
        <div class="row mt-40">
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
              </div>
              <div class="col-sm-8">
                <p class="read-note__text color-white">
                  <span class="font-weight-bold text-underlined">99.9% Customer Satisfaction</span>
                  based on 750+ reviews and 20,000 Objective Resource
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-30 font-weight-bold sub__desc">As one of the world's largest ITService Providers with over
                  120
                  engineers and IT support staff are ready to help.</p>
                <a href="#" class="btn btn__primary btn__bordered btn__icon mb-30">
                  <span>Request Demo</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
              <div class="col-sm-6">
                <ul class="list-items list-unstyled mb-30">
                  <li>450,000 client’s interactions </li>
                  <li>Help challenge critical activities</li>
                  <li>Simplify &amp; Automate Workflows</li>
                  <li>Peer perspectives and advice</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="{{ asset('assets/smart/images/banners/3.jpg')}}" alt="banner">
          </div>
        </div>
      </div>
    </section> -->

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
            <h2 class="heading__subtitle mb-0">Recent Blog Articles</h2>
          </div>
          <h3 class="heading__title mb-0">Resource Library</h3>
        </div>
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div>
  
    </div>
    <div class="row">
      <div class="col-12">
        <div class="slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "autoplay": true,"autoplaySpeed": 3000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
          <!-- portfolio item #1 -->
          @foreach($blogs as $blog)
          <div class="portfolio-item">
            <div class="portfolio__img">

              <img src="{{asset($blog->thumbnail_image)}}" alt="portfolio img">
            </div><!-- /.portfolio-img -->
            <div class="portfolio__content">
              <div class="portfolio__cat">
                @foreach ($blog->tags as $tag)
                <a href="#">{{ ucfirst($tag->name) }}</a>
                @endforeach

              </div><!-- /.portfolio-cat -->
              <h4 class="portfolio__title"><a href="#">{{$blog->title}}</a></h4>
              <p class="portfolio__desc">{{$blog->short_description}}</p>
              <a href="{{ route('single_blog', $blog->id) }}" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.portfolio-content -->
          </div><!-- /.portfolio-item -->
          @endforeach


        </div><!-- /.carousel -->
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.portfolio Grid  -->



<!-- ======================
       Banner layout 2
      =========================== -->
<section class="banner-layout2 pb-0 bg-overlay bg-overlay-primary">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/8.jpg')}}" alt="background"></div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="contact-panel">
          <!-- action="{{ asset('assets/smart/php/contact.php')}}" -->
          <form class="contact-panel__form" method="post" id="inquiryForm">
            @csrf
            <div class="row">
              <div class="col-12">
                <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                <p class="contact-panel__desc mb-30">
                Ready to Transform Your Business? Request a Quote Today. Let's Explore the Possibilities and Propel Your Success Forward.
                  <!-- Our deep pool of certified engineers and IT staff  -->
                  <!-- We are equipped to aid you in safeguarding your business's technological assets and maintaining optimal operational continuity. -->
                </p>
              </div> <!-- /.col-12 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" id="contact-name" name="name" required>
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="contact-email" name="email" required>
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
                  <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="phone">
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Additional Details!" id="contact-message" name="message"></textarea>
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

<!-- ========================
      Footer
    ========================== -->
@endsection