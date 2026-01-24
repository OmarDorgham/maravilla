<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * عرض صفحة المشاريع (جدول Projects)
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * تخزين مشروع جديد
     */
    public function store(Request $request)
    {
        // تحقق من البيانات
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'project_date' => 'required|date',
            'client_name' => 'required|string|max:255',
            'is_featured' => 'nullable',
        ]);

        // رفع الصورة إذا تم تحميلها
        if ($request->hasFile('main_image')) {
            $validated['main_image'] = $request->file('main_image')->store('projects', 'public');
        }

        // تعيين is_featured بشكل صحيح
        $validated['is_featured'] = $request->has('is_featured') ? true : false;

        // إنشاء slug
        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;

        $counter = 1;
        while (Project::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        $validated['slug'] = $slug;
        // ربط المشروع بالشركة الحالية للمستخدم
        $project = Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'project_date' => 'required|date',
            'client_name' => 'required|string|max:255',
            'is_featured' => 'nullable',
        ]);

        if ($request->hasFile('main_image')) {
            // حذف الصورة القديمة إذا موجودة
            if ($project->main_image) {
                Storage::disk('public')->delete($project->main_image);
            }
            $validated['main_image'] = $request->file('main_image')->store('projects', 'public');
        }

        $validated['is_featured'] = $request->has('is_featured') ? true : false;

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * حذف المشروع
     */
    public function destroy(Project $project)
    {
        // حذف الصورة إذا موجودة
        if ($project->main_image) {
            Storage::disk('public')->delete($project->main_image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
