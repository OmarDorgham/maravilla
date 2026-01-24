<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectImageController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        foreach ($request->file('images') as $image) {

            $path = $image->store('projects', 'public');

            $project->images()->create([
                'image' => $path
            ]);
        }
        return back()->with('success','Images uploaded successfully');
    }

    public function destroy(ProjectImage $image)
    {
        Storage::disk('public')->delete($image->image);
        $image->delete();

        return back();
    }
}
