<?php

namespace App\Http\Controllers;

use App\Models\Cate;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function index()
    {
        $cates = Cate::latest()->paginate(5);
        return view('cates.index', compact('cates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('cates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cates',
        ]);
        Cate::create($request->all());
        
        return redirect()->route('cates.index')
            ->with('success', 'Cate created successfully');
    }

    public function show(Cate $cate)
    {
        return view('cates.show', compact('cate'));
    }

    public function edit(Cate $cate)
    {
        return view('cates.edit', compact('cate'));
    }

    public function update(Request $request, Cate $cate)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('cates')->ignore($cate->id),
            ],
        ]);

        $cate->update($request->all());

        return redirect()->route('cates.index')
            ->with('success', 'Cate updated successfully');
    }

    public function destroy(Cate $cate)
    {
        $cate->delete();

        return redirect()->route('cates.index')
            ->with('success', 'Cate deleted successlly');
    }
}
