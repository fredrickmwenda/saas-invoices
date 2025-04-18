````````````````````````````````````````````````@extends('layouts.front')
@section('content')````````````````````````````````````````````````
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout15 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Five Ways to Develop a World Sales Operations
                  Function</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="post__img">
                <a href="#">
                  <img src="{{ asset('assets/smart/images/blog/single/1.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.post-img -->
              <div class="post__content">
                <div class="post__meta d-inline-flex flex-wrap align-items-center mb-0">
                  <span class="post__meta-author">
                    <img src="{{ asset('assets/smart/images/blog/author/1.jpg')}}" alt="author">
                    <span class="color-secondary">By:</span>
                    <a href="#" class="color-body">Mike Dooley</a>
                  </span>
                  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">Jan 20, 2020</span>
                </div><!-- /.blog-meta -->
                <h1 class="post__title">
                  Succession Risks That Threaten Your Leadership Strategy
                </h1>
                <div class="post__desc">
                  <p>The key to the success of any logistics contract is good logistics management. The key to good
                    management is the ability to identify the needs of the client and the countries in which the work
                    will take place, as well as being in a position to advise the best way forward. In today’s
                    international and remote locations, experience and understanding of logistics operations and local
                    networks is vital. With the many years of experience in our team, we have a detailed understanding
                    of the criticality or every aspect of the logistics world.</p>
                  <p> Focus can provide logistics personnel to meet the needs of your company or portfolio. From
                    logistics
                    managers to warehousemen, logistics controllers to transport coordinators, we can assist you. We
                    provide personnel for one-off portfolio as well as long or short-term agency personnel, assist in
                    the
                    recruitment of permanent staff, or we can manage your logistics department for you.</p>
                  <p>When travelling to a foreign country, most people are nervous of the obstacles that will be there
                    for them to overcome. When a full marine crew travels en-mass to a vessel mobilisation, it is
                    imperative that they arrive on time and safely, especially in a remote location.</p>
                  <p>Focus provides meet-and-greet facilities through our network of specialist companies. From hotel
                    reservations and taxi arrangements to a full pick-up facility, with or without armed guards, this
                    can be arranged.</p>
                  <p>Ever had a last minute requirement for items to be in a country where you do not have a visa to
                    enter? Are you frustrated at having to hand-carry important documents to your client, which takes
                    you out of the office for days? Let Focus help you. Our personnel are available 24-hours-a-day for
                    these important deliveries. This leaves you free to concentrate on your business.</p>
                </div><!-- /.blog-desc -->
              </div>
            </div><!-- /.post-item -->
            <div class="bordered-box mb-30">
              <div class="row row-no-gutter ">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                  <div class="blog-share d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Share</strong>
                    <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                  </div><!-- /.blog-share -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                  <div class="blog-tags d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Tags</strong>
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                      <li><a href="#">Consulting</a></li>
                      <li><a href="#">Tech</a></li>
                      <li><a href="#">Employee</a></li>
                      <li><a href="#">Organization</a></li>
                    </ul>
                  </div><!-- /.blog-tags -->
                </div>
              </div>
            </div>
            <div class="widget-nav d-flex justify-content-between mb-40">
              <a href="#" class="widget-nav__prev d-flex flex-wrap">
                <div class="widget-nav__img">
                  <div class="widget-nav__overlay"></div>
                  <img src="{{ asset('assets/smart/images/blog/grid/4.jpg')}}" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Previous Post</span>
                  <h5 class="fz-16 mb-0">Succession Risks Threaten Leadership Strategy</h5>
                </div>
              </a><!-- /.blog-prev  -->
              <a href="#" class="widget-nav__next d-flex flex-wrap">
                <div class="widget-nav__img">
                  <div class="widget-nav__overlay"></div>
                  <img src="{{ asset('assets/smart/images/blog/grid/6.jpg')}}" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Next Post</span>
                  <h5 class="fz-16 mb-0">Employee Engagement Surveys Tell About Employee?</h5>
                </div>
              </a><!-- /.blog-next  -->
            </div><!-- /.widget-nav  -->
            <div class="blog-author d-flex flex-wrap mb-40">
              <div class="blog-author__avatar">
                <img src="{{ asset('assets/smart/images/blog/author/4.png')}}" alt="avatar">
              </div><!-- /.author-avatar  -->
              <div class="blog-author__content">
                <h5 class="blog-author__name">Ahmed Abdallah</h5>
                <p class="blog-author__bio">Founded by Begha over many cups of tea at her kitchen table in 2009, our
                  brand promise is simple: to
                  provide powerful digital marketing solutions to small and medium businesses.</p>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                </ul>
              </div><!-- /.author-content  -->
            </div><!-- /.blog-author  -->
            <div class="blog-comments mb-40">
              <h5 class="blog-widget__title">2 comments</h5>
              <ul class="comments-list list-unstyled">
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="{{ asset('assets/smart/images/blog/author/2.jpg')}}" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h5 class="comment__author">Richard Muldoone</h5>
                    <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                      can be a perfect example
                      of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                      numbers if that was the site of a mattress selling company.</p>
                    <a class="comment__reply" href="#">reply</a>
                  </div>
                  <ul class="nested__comment list-unstyled">
                    <li class="comment__item">
                      <div class="comment__avatar">
                        <img src="{{ asset('assets/smart/images/blog/author/3.jpg')}}" alt="avatar">
                      </div>
                      <div class="comment__content">
                        <h5 class="comment__author">Mike Dooley</h5>
                        <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                        <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                          WBF can be a perfect
                          example of new keywords and content, and broadening the funnel as well. I can only imagine
                          the
                          sale numbers if that was the site of a mattress selling company.</p>
                        <a class="comment__reply" href="#">reply</a>
                      </div>
                    </li><!-- /.comment -->
                  </ul><!-- /.nested-comment -->
                </li><!-- /.comment -->
              </ul><!-- /.comments-list -->
            </div><!-- /.blog-comments -->
            <div class="blog-comments-form mb-40">
              <h5 class="blog-widget__title">Leave A Reply</h5>
              <form>
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Website:">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Comment"></textarea>
                    </div><!-- /.form-group -->
                    <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                      <input type="checkbox" class="custom-control-input" id="save">
                      <label class="custom-control-label" for="save">Save my name, email, and website in this browser
                        for the next time I comment.</label>
                    </div>
                    <button type="submit" class="btn btn__primary btn__icon justify-content-between btn__xxl">
                      <span>Submit Comment</span><i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar">
              <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">
                  <!-- post item #1 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="{{ asset('assets/smart/images/blog/grid/2.jpg')}}" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a></h4>
                      <span class="widget-post__date">Sep 19, 2020</span>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #2 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="{{ asset('assets/smart/images/blog/grid/3.jpg')}}" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a></h4>
                      <span class="widget-post__date">July 7, 2020</span>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #3 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="{{ asset('assets/smart/images/blog/grid/6.jpg')}}" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a></h4>
                      <span class="widget-post__date">March 13, 2020</span>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#"><span>IT Management</span><span class="cat-count">9</span></a></li>
                    <li><a href="#"><span>Cyber Security</span><span class="cat-count">2</span></a></li>
                    <li><a href="#"><span>Cloud Computing</span><span class="cat-count">5</span></a></li>
                    <li><a href="#"><span>IT Consulting</span><span class="cat-count">1</span></a></li>
                    <li><a href="#"><span>Software Dev</span><span class="cat-count">7</span></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-tags">
                <h5 class="widget__title">Tags</h5>
                <div class="widget-content">
                  <ul class="list-unstyled d-flex flex-wrap">
                    <li><a href="#">Insights</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Business</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-tags -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->




@endsection