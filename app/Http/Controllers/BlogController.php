<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('author', 'category')->get();

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    
    {
        $categories = BlogCategory::all();

        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:blog_categories,id',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blog = Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();

        return view('blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:blog_categories,id',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
