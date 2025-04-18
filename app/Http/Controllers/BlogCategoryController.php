<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    # construct
    // public function __construct()
    // {
    //     $this->middleware(['permission:blog_categories'])->only('index');
    //     $this->middleware(['permission:add_blog_categories'])->only(['store']);
    //     $this->middleware(['permission:edit_blog_categories'])->only(['edit', 'update']);
    //     $this->middleware(['permission:delete_blog_categories'])->only(['delete']);
    // }

    # unit list
    public function index(Request $request)
    {
        $searchKey = null;
        $categories = BlogCategory::oldest();
        if ($request->search != null) {
            $categories = $categories->where('name', 'like', '%' . $request->search . '%');
            $searchKey = $request->search;
        }

        $categories = $categories->paginate(paginationNumber());
        return view('bloging.blogCategory.index', compact('categories', 'searchKey'));
    }

    # unit store
    public function store(Request $request)
    {
        $category = new BlogCategory;
        $category->name = $request->name;
        $category->save();

        // flash(localize('Category has been inserted successfully'))->success();
        $response = [
            'success' => true,
            'message' => 'Category has been inserted successfully',
        ];

        return response()->json($response, 200); 
    
        // return redirect()->route('blog.blogCategories.index')-> with('message', 'Blog Category Created Successfully');
    }

    # edit unit
    public function edit(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('blog.blogCategory.edit', compact('category'));
    }

    # update unit
    public function update(Request $request)
    {
        $category = BlogCategory::findOrFail($request->id);
        $category->name = $request->name;
        $category->save();
        //flash(localize('Category has been updated successfully'))->success();
        return redirect()->route('blog.blogCategories.index')-> with('message', 'Blog Category Updated Successfully');

    }


    # delete unit
    public function delete($id): JsonResponse
    {
        $category = BlogCategory::findOrFail($id);
        Blog::where('blog_category_id', $category->id)->delete();
        $category->delete();
      
        return response()->json(['message' => 'Blog Category deleted successfully'], 200);
    }
}
