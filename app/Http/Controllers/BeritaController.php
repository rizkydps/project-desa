<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function index()
    {
        $blogs = Berita::all();
        return view('dashboard.admin.berita.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Kategori::all();
        return view('dasboard.admin.berita.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
            'categories'    => 'required',
        ]);

        $imagename = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('berita');
            }
        }

        $categories = Kategori::find($request->categories);

        $blog = Berita::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);

        $blog->categories()->sync($categories);

        return redirect()->route('berita');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
            'categories'    => 'required',
        ]);

        $blog = Berita::find($id);

        $imagename = [];
        if ($request->hasFile('images')) {
            foreach (explode(' ', $blog->images) as $images) {
                Storage::delete($images);
            };
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('berita');
            }
        }

        if ($request->hasFile('images') == null) {
            $imagename[] = $blog->images;
        }
        $categories = Kategori::find($request->categories);
        $blog->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);
        $blog->categories()->sync($categories);
        return redirect()->route('berita');
    }

    public function edit($id)
    {
        $categories = Kategori::all();
        $blog = Berita::find($id);
        return view('back.blogs.edit', compact('berita', 'categories'));
    }

    public function datatable()
    {
        $blogs = Berita::orderBy('created_at', 'desc')->get();

        return datatables()->of($blogs)
            // ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function delete($id)
    {
        $blog = Berita::find($id);
        foreach (explode(' ', $blog->images) as $images) {
            Storage::delete($images);
        };
        Berita::destroy($id);
        return redirect()->route('berita');
    }

}
