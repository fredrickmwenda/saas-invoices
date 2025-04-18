@extends('layouts.front')
@push('css')
<style>
  .comment__item {
    overflow: auto;
    box-sizing: border-box;

  }
</style>
@endpush

@section('content')

<!-- Livewire scripts -->

<!-- ========================
       page title 
    =========================== -->
<section class="page-title2 text-center bg-overlay" style="background-image: url('{{ asset('img/blog.jpg') }}'); background-size: cover; background-position: center;">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- ======================
      Blog Single
    ========================= -->
<section class="blog blog-single pt-5 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="post-item mb-0">
          <!-- /blog-img -->
          <div class="post__img">
            <a href="#">
              <img src="{{ asset($blog->banner)}}" alt="blog image">
            </a>
          </div>
          <!-- /blog-content -->
          <div class="post__content">
            <div class="post__meta d-inline-flex flex-wrap align-items-center mb-0">
              <span class="post__meta-author">
                <img src="{{ asset('assets/smart/images/blog/author/1.jpg')}}" alt="author">
                <span class="color-secondary">By:</span>
                <a href="#" class="color-body">
                  @if ($blog->author)
                  {{ $blog->author->first_name ?? '' }} {{ $blog->author->last_name ?? '' }}
                  @else
                  Fredrick Mwenda
                  @endif
                </a>
              </span>
              <div class="post__meta-cat">
                @foreach ($blog->tags as $tag)
                <!-- capitalize the first letter -->
                <a href="#">{{ ucfirst($tag->name) }}</a>
                @endforeach

              </div><!-- /.blog-meta-cat -->
              <span class="post__meta-date">{{ $blog->created_at->format('M d, Y') }}</span>
            </div><!-- /.blog-meta -->
            <h1 class="post__title">{{$blog->title}}</h1>
            <div class="post__desc">{!!$blog->description!!}</div><!-- /.blog-desc -->
          </div>
        </div><!-- /.post-item -->
        @php
        $shareUrl = route('single_blog', $blog->id);
        $shareText = $blog->title;
        @endphp
        <div class="bordered-box mb-30">
          <div class="row row-no-gutter ">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
              <div class="blog-share d-flex flex-wrap">
                <strong class="mr-20 color-heading">Share</strong>
                <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                  <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}" target="_blank" rel="noopener noreferrer">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com/intent/tweet?url={{ urlencode($shareUrl) }}&text={{ urlencode($shareText) }}" target="_blank" rel="noopener noreferrer">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://wa.me/?text={{ urlencode($shareText . ' ' . $shareUrl) }}" target="_blank" rel="noopener noreferrer">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </li>
                </ul>
              </div><!-- /.blog-share -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
              <div class="blog-tags d-flex flex-wrap">
                <strong class="mr-20 color-heading">Tags</strong>
                <ul class="list-unstyled d-flex flex-wrap mb-0">
                  @foreach ($blog->tags as $tag)
                  <!-- capitalize the first letter -->
                  <li><a href="#">{{ ucfirst($tag->name) }}</a></li>

                  @endforeach

                </ul>
              </div><!-- /.blog-tags -->
            </div>
          </div>
        </div>
        <div class="widget-nav d-flex justify-content-between mb-40">
          <a href="{{ route('single_blog', $previousPost->id) }}" class="widget-nav__prev d-flex flex-wrap">
            <div class="widget-nav__img">
              <div class="widget-nav__overlay"></div>
              <img src="{{ asset($previousPost->thumbnail_image)}}" alt="blog thumb">
            </div>
            <div class="widget-nav__content">
              <span>Previous Post</span>
              <h5 class="fz-16 mb-0">{{$previousPost->title}}</h5>
            </div>
          </a><!-- /.blog-prev  -->
          <a href="{{ route('single_blog', $nextPost->id) }}" class="widget-nav__next d-flex flex-wrap">
            <div class="widget-nav__img">
              <div class="widget-nav__overlay"></div>
              <img src="{{ asset($nextPost->thumbnail_image)}}" alt="blog thumb">
            </div>
            <div class="widget-nav__content">
              <span>Next Post</span>
              <h5 class="fz-16 mb-0">{{$nextPost->title}}</h5>
            </div>
          </a><!-- /.blog-next  -->
        </div>


        @if($comments->isNotEmpty())
        <div class="blog-comments mb-40">
          <h5 class="blog-widget__title">{{ count($comments) }} comments</h5>
          <ul class="comments-list list-unstyled">
            @foreach($comments as $comment)
            <li class="comment__item">
              <!-- Display comment details -->
              <div class="comment__avatar">
                <img src="{{ asset('assets/smart/images/blog/author/2.jpg')}}" alt="avatar">
              </div>
              <div class="comment__content">
                <!-- Display commenter's name or user's name -->
                <h5 class="comment__author">{{ $comment->user_id ? $comment->user->name : $comment->name }}</h5>
                <span class="comment__date">{{ $comment->created_at->format('M d, Y - h:i A') }}</span>
                <p class="comment__desc">{{ $comment->content }}</p>
                <!-- Reply link to show/hide reply form -->
                <a class="comment__reply" href="#" onclick="toggleReplyForm('{{ $comment->id }}')">reply</a>
              </div>

              <!-- Reply form -->
              <div id="replyForm_{{ $comment->id }}" style="display: none;">
                @livewire('comment-form', ['parentId' => $comment->id, 'blogId' => $blog->id])
              </div>

              <!-- Nested replies -->
              @if(count($comment->replies) > 0)
              <ul class="nested__comment list-unstyled">
                @include('front.replies', ['replies' => $comment->replies])
              </ul>

              @endif
            </li>
            @endforeach
          </ul>
        </div>

        @else
        <div class="blog-comments-form mb-40">
          <h5 class="blog-widget__title">Leave A Reply</h5>
          <!-- Display comment form for new comment -->
          @livewire('comment-form', ['parentId' => null, 'blogId' => $blog->id])
        </div>
        @endif
      </div>










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
              @foreach($recentBlogs as $recentBlog)
              <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                  <a href="#"><img src="{{ asset($recentBlog->thumbnail_image)}}" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                  <h4 class="widget-post__title"><a href="{{ route('single_blog', $blog->id) }}">{{$recentBlog->title}}</a></h4>
                  <span class="widget-post__date">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>

                </div><!-- /.widget-post-content -->
              </div>
              @endforeach

              <!-- /.widget-post-item -->
              <!-- post item #2 -->

            </div><!-- /.widget-content -->
          </div><!-- /.widget-posts -->
          <div class="widget widget-categories">
            <h5 class="widget__title">Categories</h5>
            <div class="widget-content">
              <ul class="list-unstyled">
                @foreach ($categoriesWithCount as $category)
                <li><a href="#"><span>{{ $category->name }}</span><span class="cat-count">{{ $category->blogs_count }}</span></a></li>

                @endforeach

              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-categories -->
          <div class="widget widget-tags">
            <h5 class="widget__title">Tags</h5>
            <div class="widget-content">
              <ul class="list-unstyled d-flex flex-wrap">
                @foreach($tags as $tag)
                <li><a href="#">{{$tag->name}}</a></li>
                @endforeach

              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-tags -->
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->




@endsection

@push('js')
<script>
  document.addEventListener('livewire:load', function() {
    Livewire.on('commentAdded', function() {
      // Refresh comments section
      Livewire.emit('refreshComments');
    });
  });
</script>

<script>
  function toggleReplyForm(commentId) {

    var replyForm = document.getElementById('replyForm_' + commentId);
    if (replyForm.style.display === "none") {
      replyForm.style.display = "block";
    } else {
      replyForm.style.display = "none";
    }
  }
</script>
@endpush