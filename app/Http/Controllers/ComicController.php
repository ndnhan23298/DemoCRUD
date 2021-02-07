<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Cate;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $cates = Cate::all();
        $comics = Comic::all();
        return view('comics.index', compact('comics', 'cates'));
    }

    public function create()
    {
        $cates = Cate::all();
        return view('comics.create', compact('cates'));
        // return view('comics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cate_id' => 'required'
        ]);
        Comic::create($request->all());
        
        return redirect()->route('comics.index')
            ->with('success', 'Comic created successfully');
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        $cates = Cate::all();
        return view('comics.edit', compact('comic', 'cates'));
    }

    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'name' => 'required',
            'cate_id' => 'required'
        ]);

        $comic->update($request->all());

        return redirect()->route('comics.index')
            ->with('success', 'Comic updated successfully');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')
            ->with('success', 'Comic deleted successlly');
    }
}
