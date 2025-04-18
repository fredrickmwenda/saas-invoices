@foreach($replies as $reply)
<li class="comment__item">
    <div class="comment__avatar">
        <img src="{{ asset('assets/smart/images/blog/author/3.jpg')}}" alt="avatar">
    </div>
    <div class="comment__content">
        @if(empty($reply->user_id))
        <h5 class="comment__author">{{ $reply->name }}</h5>
        @else
        <h5 class="comment__author">{{ $reply->user->name }}</h5>
        @endif
        <span class="comment__date">{{ $reply->created_at->format('M d, Y - h:i A') }}</span>
        <p class="comment__desc">{{ $reply->content }}</p>
        <a class="comment__reply" href="#" onclick="toggleReplyForm('{{ $reply->id }}')">reply</a>
    </div>

    <!-- Nested reply form -->
    <div id="replyForm_{{ $reply->id }}" style="display: none;">
        @livewire('comment-form', ['parentId' => $reply->id, 'blogId' => $blog->id])
    </div>

    <!-- Nested replies -->
    @if(count($reply->replies) > 0)
    <!-- Include the replies view -->
    @include('front.replies', ['replies' => $reply->replies])
    @endif

</li>
@endforeach
</ul>