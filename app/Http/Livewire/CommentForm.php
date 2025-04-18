<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentForm extends Component
{
    public $parentId;
    public $blogId;
    public $name;
    public $email;
    public $website;
    public $content;
    public $authenticated;

    public function mount($parentId = null, $blogId)
    {
        $this->parentId = $parentId;
        $this->blogId = $blogId;
        $this->authenticated = Auth::check();
        // dd($this->authenticated);
    }

    public function render()
    {
        
        
        return view('livewire.comment-form');
    }

    public function submitComment(Request $request)
    {
        // Extract data from serverMemo
        $requestData = $request->serverMemo['data'];
    
        // Perform authentication check
        if (Auth::check()) {
            // If user is authenticated, add user_id to the data
            $requestData['user_id'] = Auth::id();
        }
        //dd($requestData);
    
        // Convert the array to a new Request instance
        $newRequest = new \Illuminate\Http\Request($requestData);
    
        // Validate the input data
        $data = $this->validateInput($newRequest);
    
        // Proceed with your logic...
        // dd($data);
     

        if (Auth::check()) {
            dd(Auth::id());
            $commentData = [
                'user_id' => Auth::id(),
                'post_id' => $data['blogId'],
                'content' => $data['content'],
            ];
        } else {
            $commentData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'website' => $data['website'],
                'post_id' => $data['blogId'],
                'content' => $data['content'],
            ];
        }

        if (isset($data['parentId'])) {
            $commentData['parent_id'] = $data['parentId'];
            info($commentData['parent_id']);
        }

        Comment::create($commentData);

        // Reset form fields
        $this->reset();
        
        // Emit Livewire event to refresh comments
        $this->emit('commentAdded');
    }

    private function validateInput(Request $request)
    {
        // Define base validation rules
        $rules = [
            'parentId' => 'nullable|exists:comments,id',
            'blogId' => 'required|exists:blogs,id',
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email',
            'website' => 'nullable|url',
            'content' => 'required|string|max:255',
        ];
    
        // Check if user_id is null or not present and user is not authenticated
        if (!($request->has('user_id') && $request->user_id) && $request->authenticated === false) {
            // Add required rules for 'name' and 'email'
            $rules['name'] .= '|required';
            $rules['email'] .= '|required';
        }
    
        // Perform validation
        return $request->validate($rules);
    }
    
}

