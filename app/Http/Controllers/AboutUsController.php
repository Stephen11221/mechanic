<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display the about us page.
     */
    public function index()
    {
        $aboutus = Aboutus::first();
        return view('aboutus', compact('aboutus'));
    }

    /**
     * Show the form for creating a new About Us content.
     */
    public function create()
    {
     
    $aboutus = AboutUs::latest()->first(); // Fetch latest About Us entry
    return view('dashboard-file.createabout', compact('aboutus'));

    }

    /**
     * Store newly created About Us content.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $aboutUs = new AboutUs();
        $aboutUs->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aboutus', 'public');
            $aboutUs->image = $imagePath;
        }

     
        $aboutUs->save();

        return redirect()->route('createabout.store')->with('success', 'About Us created successfully!');
    }

    /**
     * Show the form for editing the About Us content.
     */
    public function edit()
    {
        $aboutUs = AboutUs::first();
        return view('dashboard-file.editabout', compact('aboutUs'));
    }

    /**
     * Update the About Us content in storage.
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!$aboutUs->exists) {
            $aboutUs = new AboutUs();
        }

        $aboutUs->content = $request->content;

        if ($request->hasFile('image')) {
            if ($aboutUs->image) {
                Storage::delete('public/' . $aboutUs->image);
            }
            $imagePath = $request->file('image')->store('aboutus', 'public');
            $aboutUs->image = $imagePath;
        }

        $aboutUs->save();

        return redirect()->route('aboutus.index')->with('success', 'About Us updated successfully!');
    }

    /**
     * Remove the About Us content from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        if ($aboutUs->image) {
            Storage::delete('public/' . $aboutUs->image);
        }

        $aboutUs->delete();

        return redirect()->route('aboutus.index')->with('success', 'About Us deleted successfully!');
    }
}
