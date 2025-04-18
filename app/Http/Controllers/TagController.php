<?php

namespace App\Http\Controllers;

use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $tags = Tag::oldest();
        if ($request->search != null) {
            $tags = $tags->where('name', 'like', '%' . $request->search . '%');
            $searchKey = $request->search;
        }

        $tags = $tags->paginate(10);
        return view('tags.index', compact('tags', 'searchKey'));
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
        
        Tag::create(['name' => $request->name]);
        
        return redirect()->back()->with('message', 'tag created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        Tag::findOrFail($id);
        return redirect()->route('tags.index')->with('message', 'tag created successfuly');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($request->id);
        $tag->name = $request->name;
        $tag->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    { 
        $tag = Tag::findOrFail($id);
        BlogTag::where('tag_id', $tag->id)->delete();
        $tag->delete();
        return response()->json(['message' => 'Tag deleted successfully'], 200);
    }
}
