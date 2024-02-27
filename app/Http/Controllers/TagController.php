<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreArtikelRequest;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Categorie;
use App\Models\Game;


use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all()->sortBy('created_at');

        return view('tags.index', compact('tags'));
    }

    public function create(Tag $tag)
    {
        $tags = Tag::all();

        return view('tags.create', compact('tag', 'tags'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'required',
        ]);

        Tag::create([
            'naam' => $request->naam,
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag created successfully.');
    }



    public function destroy(Tag $tag)
    {
        try {
            $tag->delete();
            return redirect()->route('tags.index')->with('warning', 'Tags delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the news.');
        }
    }


    public function edit(Tag $tag)
    {
        $tags = Tag::all();

        return view('tags.edit', compact('tag', 'tags'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'naam' => 'required',
        ]);

        $tag->update([
            'naam' => $request->naam,
        ]);

        return redirect()->route('tags.index')->with('info', 'Tag created successfully.');
    }

}
