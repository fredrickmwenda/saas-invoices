<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            'parent_id' => 'nullable|exists:comments,id',
            'blog_id' => 'required|exists:blogs,id',
            'name' => 'required_if:user_id,null|string|max:255',
            'email' => 'required_if:user_id,null|email',
            'website' => 'nullable|url',
            'content' => 'required|string|max:255',
        ]);
    
        if (auth()->check()) {
            $commentData = [
                'user_id' => auth()->user()->id,
                'blog_id' => $data['blog_id'],
                'content' => $data['content'],
            ];
        } else {
            $commentData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'website' => $data['website'],
                'blog_id' => $data['blog_id'],
                'content' => $data['content'],
            ];
        }
    
        if (isset($data['parent_id'])) {
            $commentData['parent_id'] = $data['parent_id'];
        }
    
        $comment = Comment::create($commentData);
    
        return back()->with('success', 'Comment posted!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
