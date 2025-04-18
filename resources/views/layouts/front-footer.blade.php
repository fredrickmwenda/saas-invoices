<footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
              <div class="footer-widget__content">
                <img src="{{ asset('assets/smart/images/logo/logo.png')}}" alt="logo" class="mb-30">
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-3 -->
            <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Company</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>                   
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Pricing and plans</a></li>
                    <li><a href="#">Terms of Service</a></li>                   
                    <li><a href="#">Contacts</a></li>
                   
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-4 col-lg-4 footer-widget footer-widget-nav">
    <h6 class="footer-widget__title">Solutions</h6>
    <div class="footer-widget__content">
        <div class="row">
            <div class="col-lg-6">
                <nav>
                    <ul class="list-unstyled">
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Software Dev</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-6">
                <nav>
                    <ul class="list-unstyled">
                        <li><a href="#">IT Support</a></li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Apis Integration</a></li>
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">Saas Solutions</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- /.footer-widget__content -->
</div><!-- /.col-lg-4 -->

            <!-- <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Resources</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="pricing.html">Pricing and plans</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="faqs.html">Help & FAQ</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="#">Site map</a></li>
                  </ul>
                </nav>
              </div>
            </div> -->
            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget">
              <h6 class="footer-widget__title">Newsletter</h6>
              <div class="footer-widget__content">
                <form class="footer-form" action="{{route('subscribe')}}" id="subscription-form"  method="post">
                  @csrf
                  <div class="form-group mb-20">
                    <input type="email" name="email" class="form-control" placeholder="Your Email Address">
                    <button type="submit" class="footer-form__submit"><i class="icon-arrow-right"></i></button>
                  </div>
                  <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                  <!-- {{ old('remember') ? 'checked' : '' }} -->
                    <input type="checkbox" name='accept' class="custom-control-input" id="terms" value="1" checked >
                    <label class="custom-control-label color-gray" for="terms">I accept the privacy and terms.</label>
                  </div>
                  <input type="hidden" name="ajax" value="1">
                </form>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-5 col-lg-5">
              <div class="footer__copyrights">
                <span class="fz-14">&copy;  <script> document.write(new Date().getFullYear()) </script> Servoll Technologies, All Rights Reserved. </span>
                <!-- <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a> -->
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-2 col-lg-2 text-center">
              <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
              <ul class="social-icons list-unstyled mb-0 mr-30">
                <!-- <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li> -->
                <li><a href="https://www.linkedin.com/company/102562429" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/ServollTech" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul><!-- /.social-icons -->
              <!-- <div>
                <a href="#" class="btn btn__white btn__download mr-20">
                  <i class="fab fa-apple"></i>
                  <span>App Store</span>
                </a>
                <a href="#" class="btn btn__white btn__download">
                  <i class="fab fa-google-play"></i>
                  <span>Google Play</span>
                </a>
              </div> -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->