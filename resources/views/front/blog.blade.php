@extends('layouts.front')
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="{{ asset('assets/smart/Data/page-titles12.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-10">Our Blog</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
          @foreach($blogs as $blog)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="{{ route('single_blog', $blog->id) }}">
                  <img src="{{asset($blog->thumbnail_image)}}" alt="post image">
                </a>
              </div><!-- /.post-img -->
              <div class="post__content">
                <div class="post__meta-cat">
                @foreach ($blog->tags as $tag)
                <!-- capitalize the first letter -->
                <a href="#">{{ ucfirst($tag->name) }}</a> 
                @endforeach
                  <!-- <a href="#">Consulting</a><a href="#">Sales</a> -->
                </div><!-- /.post-meta-cat -->
                <span class="post__meta-date">{{ $blog->created_at->format('M d, Y') }}</span>

                <h4 class="post__title"><a href="#">{{$blog->title}}</a>
                </h4>
                <p class="post__desc">{{$blog->short_description}}
                </p>
                <a href="{{ route('single_blog', $blog->id) }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post-content -->
            </div>
          </div>
          @endforeach
          <!-- post Item #2 -->
   
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
    </section><!-- /.blog Grid -->
@endsection

 


