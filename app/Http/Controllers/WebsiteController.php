<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.welcome');
    }

    public function about()
    {
        return view('website.about');
    }

    public function projects()
    {
        return view('website.projects');
    }

    public function showProject(Project $project)
    {
        $previous = Project::where('id', '<', $project->id)->orderBy('id', 'desc')->first();
        $next = Project::where('id', '>', $project->id)->orderBy('id', 'asc')->first();

        return view('website.project', compact('project', 'next', 'previous'));
    }

}
