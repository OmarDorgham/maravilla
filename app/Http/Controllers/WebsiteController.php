<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationSubmitted;

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
        $projects = Project::where('is_featured', 1)->get();
        return view('website.projects', compact('projects'));
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
        $posts = Post::whereNotIn('id', $recentPosts->pluck('id'))->latest()->paginate(5);
        return view('website.blog', compact('posts', 'recentPosts'));
    }

    public function post(Post $post)
    {
        $words = explode(' ', $post->title);

        $chunk1 = implode(' ', array_slice($words, 0, 1));
        $chunk2 = implode(' ', array_slice($words, 1, 1));
        $chunk3 = implode(' ', array_slice($words, 2, 1));
        $chunk4 = implode(' ', array_slice($words, 3));
        return view('website.post', get_defined_vars());
    }

    public function careersIndex()
    {
        return view('website.careers');
    }

    public function careersStore(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'position' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'], // 5MB
        ]);

        $file = $request->file('cv');
        $safeName = Str::uuid()->toString() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('careers/cv', $safeName, 'public'); // storage/app/public/...

        $application = CareerApplication::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'position' => $validated['position'] ?? null,
            'location' => $validated['location'] ?? null,
            'message' => $validated['message'] ?? null,
            'cv_path' => $path,
            'cv_original_name' => $file->getClientOriginalName(),
            'ip_address' => $request->ip(),
        ]);
        $cvUrl = Storage::disk('public')->url($application->cv_path);

        Mail::to(config('careers.admin_email'))->send(
            new CareerApplicationSubmitted($application, $cvUrl)
        );
        return back()->with('success', 'Your application has been submitted successfully.');
    }
}
