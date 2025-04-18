<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $services = Service::all();
        $blogs = Blog::with('tags', 'category')->get();

        return view('front.index', compact('services', 'blogs'));
    }

    public function contact()
    {
        return view('front.contact-us');
    }


    public function careers()
    {
        return view('front.careers');
    }

    public function about()
    {
        return view('front.about-us');
    }

    public function blog(Request $request)
    {
        $blogs = Blog::with('tags', 'category')->get();
        $blog_categories = BlogCategory::all();
        return view('front.blog', compact('blogs', 'blog_categories'));
    }

    public function single_blog(Request $request, $id)
    {
        $blog  = Blog::findOrfail($id);
        $comments = Comment::where('post_id', $id)->whereNull('parent_id')->get();
        $tags = Tag::all();
        $categoriesWithCount = BlogCategory::withCount('blogs')->get();

        $recentBlogs = Blog::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(3)->get();

        // Fetch the previous post
        $previousPost = Blog::where('created_at', '<', $blog->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        // Fetch the next post
        $nextPost = Blog::where('created_at', '>', $blog->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        // If there is no previous post, show the current one as previous
        if (!$previousPost) {
            $previousPost = $blog;
        }

        // If there is no next post, show the current one as next
        if (!$nextPost) {
            $nextPost = $blog;
        }

        return view('front.blog-single-post', compact('tags', 'categoriesWithCount', 'blog', 'recentBlogs', 'nextPost', 'previousPost', 'comments'));
    }

    public function blog_details(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->with('tags', 'category');
        $blog_categories = BlogCategory::all();
        return view('front.blog', compact('blog', 'blog_categories'));
    }

    public function case_study_carousel()
    {

        return view('front.case-studies-carousel');
    }

    public function case_study_classic()
    {

        return view('front.case-studies-classic');
    }

    public function case_study_grid()
    {

        return view('front.case-studies-grid');
    }

    public function services()
    {

        return view('front.it-solutions');
    }

    public function service_details()
    {

        return view('front.it-solutions-single');
    }

    public function faqs()
    {
        return view('front.faqs');
    }

    public function awards()
    {
        return view('front.awards');
    }


    public function request_quote()
    {
        return view('front.request-quote');
    }
}
