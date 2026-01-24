<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamMemberController extends Controller
{
    public function index()
    {
        $team = TeamMember::latest()->get();
        return view('dashboard.team.index', compact('team'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'job_title'  => 'required|string|max:255',
            'image'      => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'whatsapp'   => 'nullable|url',
            'linkedin'   => 'nullable|url',
            'instagram'  => 'nullable|url',
            'behance'    => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('team', 'public');
        }

        TeamMember::create($validated);

        return redirect()->back()->with('success', 'Team member added successfully!');
    }
}
