<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; 
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Show all images in the gallery
    public function index()
    {
        $images = Image::all(); // Fetch all images from the database
        return view('gallery.index', compact('images'));
    }

    // Show the form to create a new image
    public function create()
    {
        return view('gallery.create');
    }

    // Store the new image
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:16',
            'passcode' => 'required|digits:4',
            'image' => 'required|image',
            'description' => 'nullable|max:250',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('images', 'public');

        $image = new Image();
        $image->username = $request->username;
        $image->passcode = $request->passcode;
        $image->filename = $imagePath;
        $image->description = $request->description;
        $image->save();

        return redirect()->route('gallery.index');
    }

    // Show the details of a single image
    public function show($id)
    {
        $image = Image::findOrFail($id);
        return view('gallery.show', compact('image'));
    }

    // Show the form to edit an image
    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('gallery.edit', compact('image'));
    }

    // Update the image data
    public function update(Request $request, $id)
    {
        $request->validate([
            'passcode' => 'required|digits:4',
            'description' => 'nullable|max:250',
        ]);

        $image = Image::findOrFail($id);

        // Check passcode
        if ($request->passcode != $image->passcode) {
            return redirect()->back()->withErrors(['passcode' => 'Invalid passcode']);
        }

        $image->description = $request->description;
        $image->save();

        return redirect()->route('gallery.index');
    }

    // Delete an image
    public function destroy(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        // Check passcode before deletion
        if ($request->passcode != $image->passcode) {
            return redirect()->back()->withErrors(['passcode' => 'Invalid passcode']);
        }

        // Delete the image file and record
        Storage::delete('public/' . $image->filename);
        $image->delete();

        return redirect()->route('gallery.index');
    }
}
