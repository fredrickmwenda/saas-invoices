<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = Service::all();
        return view('services.service.index', compact('services'));
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
        // Validate the request
        info($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
        ]);
    
        // Check if an image is present in the request
        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
        
            // Define your destination path using Laravel Storage
            $destinationPath = 'public/assets/services'; // Adjust your storage path
        
            // Store the file in the defined destination path
            $uploadedImage = $file->store($destinationPath);
        
            // Store the file path in the $input array
            $input['image'] = $uploadedImage;
        } else {
            // If no image is provided, set a flash message and redirect back
            Flash::error(__('messages.flash.no_image'));
            return;
        }
        
        // Assign other form inputs to the $input array
        $input['name'] = $request->input('name');
        $input['description'] = $request->input('description');
    
        // Create a new Service instance and store it in the database
        Service::create($input);
    
        Flash::success(__('messages.flash.product_created_successfully'));
        return redirect()->back(); // Redirect as needed
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
