<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Tag;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class BlogController extends Controller
{
    # construct
    // public function __construct()
    // {
    //     $this->middleware(['permission:blogs'])->only('index');
    //     $this->middleware(['permission:add_blogs'])->only(['create', 'store']);
    //     $this->middleware(['permission:edit_blogs'])->only(['edit', 'update']);
    //     $this->middleware(['permission:publish_blogs'])->only(['updateStatus']);
    //     $this->middleware(['permission:delete_blogs'])->only(['delete']);
    // }

    # blog list
    public function index(Request $request)
    {
        $searchKey = null;
        $is_published = null;

        $blogs = $blogs = Blog::with('category', 'tags')->orderBy('blogs.created_at', 'desc');

        //dd($blogs);
     
        if ($request->search != null) {
            $blogs = $blogs->where('title', 'like', '%' . $request->search . '%');
            $searchKey = $request->search;
        }


        if ($request->is_published != null) {
            $blogs = $blogs->where('is_active', $request->is_published);
            $is_published    = $request->is_published;
        }


        $blogs = $blogs->paginate(paginationNumber());
        return view('bloging.blog.index', compact('blogs', 'searchKey', 'is_published'));
    }


    # return view of create form
    public function create()
    {
        $categories = BlogCategory::pluck('name', 'id')->toArray();
        $tags = Tag::pluck('name', 'id')->toArray();
        // dd($tags);
        return view('bloging.blog.create', compact('categories', 'tags'));
    }

    # blog store
    public function store(Request $request)
    {
        // dd($request->all());
        $blog = new Blog;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
    
            // Save original image
            $location = 'images/original/' . $filename;
            $destination_banner = public_path($location);
            $img = Image::make($image)->resize(1200, 700);
           // $img->move($destination_banner, $filename);
            $img->save($destination_banner);
            $blog->banner = $location;
    
            // Save thumbnail
            $location = 'images/thumbnail/' . $filename;
            $destination_thumbnail = public_path($location);
            $img = Image::make($image)->resize(600, 400);
            //$img->move($destination_thumbnail, $filename);
            $img->save($destination_thumbnail);
            $blog->thumbnail_image = $location;
        }
        
        $blog->title = $request->title;
       

        if ($request->slug != null) {
            $blog->slug = Str::slug($request->slug);
        } else {
            $blog->slug = Str::slug($request->title) . '-' . Str::random(5);
        }

        $blog->blog_category_id = $request->category_id;
        $blog->short_description = $request->short_description;

        $blog->video_link = $request->video_link;
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $safe_description = $purifier->purify($request->input('description'));
        $blog->description = $safe_description;
        dd($blog->description);

        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        if($request->hasFile('meta_image')) {
            $image_view = $request->file('meta_image');
            $filename_view = time() . '.' . $image_view->getClientOriginalExtension(); 
            // Save original image
            $img_location = 'images/meta';
            $destination_meta= public_path($img_location);
            $image->move($destination_meta, $filename_view);
            $blog->meta_img = $img_location . '/' . $filename_view;
        }

        // The Author ofthe blog
        $blog->created_by = auth()->user()->id;

        $blog->save();
        $blog->tags()->sync($request->tag_id);

        // $blogLocalization = BlogLocalization::firstOrNew(['lang_key' => env('DEFAULT_LANGUAGE'), 'blog_id' => $blog->id]);
        // $blogLocalization->title = $blog->title;
        // $blogLocalization->short_description = $blog->short_description;
        // $blogLocalization->description = $blog->description;
        // $blogLocalization->save();

        $blog->save();
        //flash(localize('Blog has been inserted successfully'))->success();
        return redirect()->route('blogs.index');
    }

    # edit blog
    public function edit(Request $request, $id)
    {
        // $lang_key = $request->lang_key;
        // $language = Language::isActive()->where('code', $lang_key)->first();
        // if (!$language) {
        //     flash(localize('Language you are trying to translate is not available or not active'))->error();
        //     return redirect()->route('admin.blogs.index');
        // }

        $categories = BlogCategory::all();
        $tags = Tag::all();

        $blog = Blog::findOrFail($id);
        return view('bloging.blog.edit', compact('blog', 'categories', 'tags', 'lang_key'));
    }

    # update blog
    public function update(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        if ($request->lang_key == env("DEFAULT_LANGUAGE")) {
            $blog->title = $request->title;
            $blog->slug = (!is_null($request->slug)) ? Str::slug($request->slug, '-') : Str::slug($request->name, '-') . '-' . strtolower(Str::random(5));
            $blog->blog_category_id = $request->category_id;

            $blog->thumbnail_image = $request->image;
            $blog->banner = $request->banner;
            $blog->meta_img = $request->meta_image;

            $blog->short_description = $request->short_description;
            $blog->description = $request->description;

            $blog->video_link = $request->video_link;


            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;

            $blog->save();
            $blog->tags()->sync($request->tag_ids);
        }

        // $blogLocalization = BlogLocalization::firstOrNew(['lang_key' => $request->lang_key, 'blog_id' => $blog->id]);
        // $blogLocalization->title = $request->title;
        // $blogLocalization->short_description = $request->short_description;
        // $blogLocalization->description = $request->description;

        $blog->save();
       // $blogLocalization->save();

       // flash(localize('Blog has been updated successfully'))->success();
        return back();
    }

    # update popular 
    public function updatePopular(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $blog->is_popular = $request->is_popular;
        if ($blog->save()) {
            return 1;
        }
        return 0;
    }

    # update status 
    public function updateStatus(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $blog->is_active = $request->is_active;
        if ($blog->save()) {
            return 1;
        }
        return 0;
    }

    # delete blog
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        BlogTag::where('blog_id', $blog->id)->delete();
        $blog->delete();
        //flash(localize('Blog has been deleted successfully'))->success();
        return back();
    }
}
