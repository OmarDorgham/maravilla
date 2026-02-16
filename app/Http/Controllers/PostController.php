<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('dashboard.blog.index', compact('posts'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'featured_image' => 'required|image',
        ]);

        $image = $request->file('featured_image')->store('posts', 'public');

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'excerpt' => Str::limit(strip_tags($request->content), 150),
            'featured_image' => $image,
        ]);

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'published_at' => 'nullable|date',
            'featured_image' => 'nullable|image',
        ]);


        if ($request->title !== $post->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $count = 1;

            while (Post::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $validated['slug'] = $slug;
        }


        $validated['excerpt'] = Str::limit(strip_tags($request->content), 150);


        if ($request->hasFile('featured_image')) {

            if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
                Storage::disk('public')->delete($post->featured_image);
            }

            $validated['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($validated);

        return redirect()->back()->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {

        if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
            Storage::disk('public')->delete($post->featured_image);
        }


        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
