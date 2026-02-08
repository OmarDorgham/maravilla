<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    public function index()
    {
        $posts = Post::whereNotNull('published_at')->get();

        return response()
            ->view('website.sitemap', compact('posts'))
            ->header('Content-Type', 'text/xml');
    }

    public function home()
    {
        return view('website.welcome');
    }

    public function about()
    {
        $teamMembers = TeamMember::limit(4)->get();
        $recentPosts = Post::latest()->limit(2)->get();
        return view('website.about', compact('teamMembers', 'recentPosts'));
    }

    public function privacyPolicy()
    {
        return view('website.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('website.terms-and-conditions');
    }

    public function cookiePolicy()
    {
        return view('website.cookie-policy');
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

    public function contact()
    {
        return view('website.contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function blog()
    {
        $recentPosts = Post::latest()->limit(2)->get();
        $posts = Post::whereNotIn('id',$recentPosts->pluck('id'))->latest()->paginate(5);
        return view('website.blog',compact('posts', 'recentPosts'));
    }

}
