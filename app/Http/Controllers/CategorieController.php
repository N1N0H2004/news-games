<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreArtikelRequest;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Categorie;
use App\Models\Game;


use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all()->sortBy('created_at');

        return view('categories.index', compact('categories'));
    }

    public function create(Categorie $categorie)
    {
        $categories = Tag::all();

        return view('categories.create', compact('categorie', 'categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'required',
        ]);

        Categorie::create([
            'naam' => $request->naam,
        ]);

        return redirect()->route('tags.index')->with('success', 'Event created successfully.');
    }



    public function destroy(Categorie $categories)
    {
        try {
            $tag->delete();
            return redirect()->route('tags.index')->with('warning', 'Tags delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the news.');
        }
    }


    public function edit(Categorie $categories)
    {
        $tags = Tag::all();

        return view('tags.edit', compact('tag', 'tags'));
    }

    public function update(Request $request, Categorie $categories)
    {
        $request->validate([
            'naam' => 'required',
        ]);

        $tag->update([
            'naam' => $request->naam,
        ]);

        return redirect()->route('tags.index')->with('success', 'Event created successfully.');
    }

}
