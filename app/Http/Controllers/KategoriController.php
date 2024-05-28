<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        return view('back.categories.index');
    }


    public function store(Request $request)
    {
        Kategori::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('Kategori berhasil ditambahkan');
    }

    public function edit(Category $id)
    {
        $category = Kategori::find($id);
        return view('back.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Kategori::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('category')->with('Kategori berhasil di-update');
    }

    public function delete($id)
    {
        Kategori::destroy($id);
        return redirect()->back();
    }

    public function datatable()
    {
        $categories = Kategori::all();

        return datatables()->of($categories)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->toJson();
    }
}
