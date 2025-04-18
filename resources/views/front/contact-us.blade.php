@extends('layouts.front')
@section('content')



    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <!-- <div id="map" class="height-500">


      </div> -->
      <div class="map-container">


         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.364476137353!2d36.79972893661582!3d-1.268124679516723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173c0a1f9de7%3A0xad2c84df1f7f2ec8!2sWestlands%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1704281673247!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        
        <!-- width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
</div>
      <!-- <script src="assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script> -->
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 mb-3">
          <!-- action="assets/php/contact.php" -->
          <form class="contact-panel__form" method="post" id="contactForm">
          @csrf
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Get In Touch</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="name"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="email"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-12">
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="Phone" id="contact-Phone" name="phone"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <!-- <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Website" id="contact-website"
                      name="contact-website">
                  </div>
                </div> -->
                <!-- /.col-lg-6 -->
                <div class="col-12">
                  <div class="form-group mb-20">
                    <textarea class="form-control" placeholder="Additional Details!" id="contact-message"
                      name="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn__primary btn__xhight mt-10">Submit Request</button>
                  <div class="contact-result"></div>
                </div><!-- /.col-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-4 offset-lg-1 mb-3">
            <div class="contact-info d-flex flex-column justify-content-between">
              <div class="bg-img"><img src="{{ asset('assets/smart/images/contact/1.jpg')}}" alt="banner"></div>
              <div>
                <h4 class="contact-info__title">Access All Tech Needs with Servoll Tech</h4>
                <p class="contact-info__desc">At Servoll Tech, we specialize in meeting all your technological requirements, offering innovative solutions and support across various domains. Contact us today to experience seamless integration, cutting-edge advancements, and expert guidance tailored to your specific needs

              
                </p>
              </div>
              <!-- <a href="contact-us.html" class="btn btn__white btn__bordered btn__icon">
                <span>Download Brochure</span>
                <i class="icon-arrow-right"></i>
              </a> -->
            </div><!-- /.contact-info -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->




   @endsection