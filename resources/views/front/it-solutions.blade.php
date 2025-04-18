@extends('layouts.front')
@push('css')
<style>
.saas-item__label {
    background-image: linear-gradient(135deg, #ff690f 0%, #d90d32);
    color: #fff !important;
    padding: 0.28rem 0.5rem;
    position: absolute;
    top: 20px;
    left: 48px;
    font-size: 0.85rem;
    border-radius: 8px;
   
}

.saas_content {
  margin-top: 10px;
}
</style>
@endpush
@section('content')

<!-- ========================
       page title 
    =========================== -->
<section class="page-title page-title-layout8 bg-overlay bg-overlay-gradient bg-parallax">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/page-titles/8.jpg')}}" alt="background"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
        <h1 class="pagetitle__heading">Streamline Your Business Operations</h1>
        <p class="pagetitle__desc">From tailored solutions to proactive support, our comprehensive IT services pave the way for your organization's seamless journey into the realms of innovation and efficiency
          technology.</p>
      </div><!-- /.col-xl-6 -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 cta-banner-wrapper d-flex justify-content-end">
        <div class="cta-banner text-center">
          <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
            <div class="cta__item">
              <div class="cta__icon"><i class="icon-operating-system"></i></div>
              <h4 class="cta__title">Software License</h4>
              <p class="cta__desc">Build dynamic request templates with associated workflows, and tasks.</p>
            </div><!-- /.cta__item -->
            <div class="cta__item">
              <div class="cta__icon"><i class="icon-dos"></i></div>
              <h4 class="cta__title">Privileged Access</h4>
              <p class="cta__desc">Extend proven Tech best practices to HR, finance, and other service
                delivery areas.</p>
            </div><!-- /.cta__item -->
          </div><!-- /.slick-carousel -->
        </div><!-- /.cta-banner -->
      </div><!-- /.col-xl-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-12">
        <nav>
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">IT Solutions</li>
          </ol>
        </nav>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
        Services Layout 2
    =========================== -->
<section class="services-layout2 pt-130 pb-90">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
        <div class="heading text-center mb-50">
          <h2 class="heading__subtitle">Nationwide Service, Global Expertise</h2>
          <h3 class="heading__title"> Offering the latest software and IT services to our clients!</h3>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
    <div class="row">
      <!-- service item #1 -->

      <!-- service item #3 -->
  
    
      <!-- service item #5 -->
      <div class="col-sm-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-code"></i>
            </div>
            <h4 class="service__title">Software Development</h4>
            <p class="service__desc">Transform your online presence with our comprehensive software development services, covering both backend and frontend aspects, with a collaborative and agile approach, we deliver full-stack web solutions that align perfectly with your business goals, enhancing both functionality and user satisfaction.</p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-website"></i>
            </div>
            <h4 class="service__title">Web Design</h4>
            <!-- Whether you need a brand-new website or a redesign -->
            <p class="service__desc">Elevate your online presence with our expert web design services. Our creative team combines aesthetics and functionality to craft visually stunning and user-friendly websites. From responsive layouts to intuitive navigation, we ensure a seamless user experience across various devices.</p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-software"></i>
            </div>
            <h4 class="service__title">Mobile Apps</h4>
            <p class="service__desc">Bring your ideas to life and reach a broader audience with our mobile app development services. Whether you prefer the efficiency of hybrid apps or the platform-specific advantages of native apps.

              We provide end-to-end solutions to help you make a significant impact in the mobile app landscape
            </p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-code"></i>
            </div>
            <h4 class="service__title">Graphic Design</h4>
            <p class="service__desc">
Transform your ideas into visually compelling realities with our graphic design expertise. From stunning logos and captivating branding materials to engaging marketing collateral and user-friendly interface designs, we excel in delivering visually appealing solutions.</p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-code"></i>
            </div>
            <h4 class="service__title">UI/UX Design</h4>
            <p class="service__desc">Craft an exceptional user experience with our UI/UX design services. 
            Through a user-centered approach, we prioritize both aesthetics and functionality, ensuring that your digital products not only look visually appealing but also provide a smooth and enjoyable experience for your audience

            </p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-api"></i>
            </div>
            <h4 class="service__title">Apis Integration</h4>
            <p class="service__desc">Seamlessly connect  your digital ecosystem with our API integration services. APIs are efficient for  data exchange  between diverse software systems. From connecting third-party services, streamlining workflows, to enhancing the capabilities of your applications.</p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- service item #6 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-internet"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">IT Support</h4>
            <p class="service__desc">Experience reliable and prompt IT support with our dedicated team of experts. From troubleshooting technical issues to ensuring seamless operations, we provide responsive assistance to keep your systems running smoothly.</p>
          
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->

        <!-- service item #4 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-permission"></i>
            </div>
            <h4 class="service__title">IT Consulting </h4>
            <p class="service__desc">Elevate your business's technology landscape with our expert IT consulting services. We offer strategic guidance, innovative solutions, and tailored recommendations to optimize your IT infrastructure. </p>
     
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- service item #1 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-server"></i>
            </div>
            <h4 class="service__title">Structured Cabling </h4>
            <p class="service__desc">Establish a robust and efficient network foundation with our structured cabling solutions.
             Our structured cabling services ensures reliability, scalability,  laying the groundwork for a resilient and high-performance network infrastructure.
              
          </p>
         
              <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- service item #2 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-cyberspace"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">Web Hosting</h4>
            <p class="service__desc">Host your website with confidence on our reliable and high-performance web hosting platform. Enjoy fast loading times, secure server environments, and exceptional customer support to ensure your online presence is always accessible and optimized.</p>
         
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <!-- service item #3 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-cloud-computing"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">Domain Selling</h4>
            <p class="service__desc">Explore a vast selection of premium domains for sale on our platform. Elevate your online presence with a memorable and brandable domain name that aligns perfectly with your business or project. Establish a strong and distinctive online identity.</p>
           
              
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
      <!-- service item #4 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="fas fa-mask"></i>
            </div>
            <h4 class="service__title">CCTV Installation</h4>
            <p class="service__desc">Ensure the safety of your surroundings with our professional CCTV installation services. From residential spaces to commercial establishments, we tailor our installations to meet your specific needs, offering top-notch surveillance solutions for enhanced security and monitoring</p>
         
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    
      <!-- service item #5 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="icon-code"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">Hardware Security</h4>
            <p class="service__desc">Fortify your digital assets with our hardware security solutions. We specialize in implementing robust measures to safeguard your hardware infrastructure against unauthorized access, data breaches, and cyber threats.</p>

            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->


            
  
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
          <div class="service__content">
            <div class="service__icon">
              <i class="fas fa-exclamation-circle"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">Alarm Security </h4>
            <p class="service__desc">Safeguard your premises with our advanced alarm security systems. We specialize in the installation and maintenance of sensors and alarms  ensuring that your property remains protected around the clock</p>

            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
 
      <!-- service item #6 -->
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="service-item">
        <span class="saas-item__label">Coming Soon</span>
          <div class="service__content saas_content" >
            <div class="service__icon">
              <i class="icon-internet"></i>
            </div><!-- /.service__icon -->
            <h4 class="service__title">SAAS</h4>
            <p class="service__desc">Experience the next level of business optimization with our SAAS solutions. Whether you seek the versatility of hybrid solutions or the precision of platform-specific advantages, we are well-versed in both approaches</p>
      
            <a href="#" class="btn btn__secondary">
              <span>Read More</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.service-content -->
        </div><!-- /.service-item -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Services Layout 2 -->

<!-- ======================
    Features Layout 1
    ========================= -->


<hr class="mt-120 mb-30">



<!-- =========================
       Banner layout 2
      =========================== -->
<section class="banner-layout2 pb-0 bg-overlay bg-overlay-primary">
  <div class="bg-img"><img src="{{ asset('assets/smart/images/banners/8.jpg')}}" alt="background"></div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="contact-panel">
        <form class="contact-panel__form" method="post" id="contactForm" route=>
          "
            <div class="row">
              <div class="col-12">
                <h4 class="contact-panel__title mb-20">Request A Quote</h4>
                <p class="contact-panel__desc mb-30">Ready to Transform Your Business? Request a Quote Today. Let's Explore the Possibilities and Propel Your Success Forward."</p>
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

<!-- =========================
      Awards
      =========================== -->
<!-- <section class="awards pb-70">
  <div class="container">
    <div class="row heading mb-60">
      <div class="col-12 d-flex align-items-center mb-20">
        <div class="divider divider-primary mr-30"></div>
        <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5">
        <h3 class="heading__title">Trusted by the world's best organizations for 21 years.
        </h3>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2">
        <p class="heading__desc">SmartData been helping organizations and Providers through the World to manage
          their IT with our unique approach to technology management and consultancy solutions. </p>
        <a href="#" class="btn btn__primary btn__icon mt-20">
          <span>Get Started</span>
          <i class="icon-arrow-right"></i>
        </a>
      </div>
    </div>
    <div class="row awards-wrapper">
      <div class="col-sm-6 col-md-6 col-lg-3">
      
        <div class="fancybox-item">
          <div class="fancybox__icon-img">
            <img src="{{ asset('assets/smart/images/awards/icons/1.png')}}" alt="icon">
          </div>
          <div class="fancybox__content">
            <h4 class="fancybox__title">CSS Design Award</h4>
            <p class="fancybox__desc">A web design & development award platform for digital folk, UI/UX peeps
              and inspiring leaders of the web.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
       
        <div class="fancybox-item">
          <span class="pinned-ribbon"></span>
          <div class="fancybox__icon-img">
            <img src="{{ asset('assets/smart/images/awards/icons/2.png')}}" alt="icon">
          </div>
          <div class="fancybox__content">
            <h4 class="fancybox__title">W3 Design Award</h4>
            <p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
              Marketing, Video, Sites, Apps & Social content.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="fancybox-item">
          <div class="fancybox__icon-img">
            <img src="{{ asset('assets/smart/images/awards/icons/3.png')}}" alt="icon">
          </div>
          <div class="fancybox__content">
            <h4 class="fancybox__title">The FWA Award</h4>
            <p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to showcase
              cutting edge creativity, regardless
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        
        <div class="fancybox-item">
          <div class="fancybox__icon-img">
            <img src="{{ asset('assets/smart/images/awards/icons/3.png')}}" alt="icon">
          </div>
          <div class="fancybox__content">
            <h4 class="fancybox__title">WWW Awards</h4>
            <p class="fancybox__desc">The awards that recognize the talent and effort of the best web
              designers, developers and agencies in the world.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /.Awards -->

<!-- =====================
           Clients
    ======================== -->
<!-- <section class="clients border-top pt-50 pb-50">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="slick-carousel" data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
          <div class="client">
            <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
            <img src="{{ asset('assets/smart/images/clients/1.png')}}" alt="client">
          </div>
          < <div class="client">
            <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
            <img src="{{ asset('assets/smart/images/clients/2.png')}}" alt="client">
        </div>
        <div class="client">
          <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
          <img src="{{ asset('assets/smart/images/clients/3.png')}}" alt="client">
        </div>
        < <div class="client">
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
  </div>
</section> -->

<!-- ========================
      Footer
    ========================== -->
@endsection