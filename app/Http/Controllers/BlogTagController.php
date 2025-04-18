<?php

namespace App\Http\Controllers;

use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
    # construct
    // public function __construct()
    // {
    //     $this->middleware(['permission:tags'])->only('index');
    //     $this->middleware(['permission:add_tags'])->only(['store']);
    //     $this->middleware(['permission:edit_tags'])->only(['edit', 'update']);
    //     $this->middleware(['permission:delete_tags'])->only(['delete']);
    // }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchKey = null;
        $tags = BlogTag::oldest();
        if ($request->search != null) {
            $tags = $tags->where('name', 'like', '%' . $request->search . '%');
            $searchKey = $request->search;
        }

        $tags = $tags->paginate(paginationNumber());
        return view('bloging.tags.index', compact('tags', 'searchKey'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BlogTag::create(['name' => $request->name]);
      

        
        return redirect()->route('tags.index')->with('message', 'tag created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $tag = BlogTag::findOrFail($id);
        return view('bloging.tags.edit', compact($tag));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tag = BlogTag::findOrFail($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('tags.index')->with('message', 'tag updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tag = BlogTag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tags.index')->with('message', 'tag deleted successfuly');
       
    }
}
