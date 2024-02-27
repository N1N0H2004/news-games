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

        return redirect()->route('categories.index')->with('success', 'Event created successfully.');
    }



    public function destroy(Categorie $categorie)
    {
        try {
            $categorie->delete();
            return redirect()->route('categories.index')->with('warning', 'Categories delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the categories.');
        }
    }


    public function edit(Categorie $categorie)
    {
        $categories = Categorie::all();

        return view('categories.edit', compact('categorie', 'categories'));
    }

    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'naam' => 'required',
        ]);

        $categorie->update([
            'naam' => $request->naam,
        ]);

        return redirect()->route('categories.index')->with('success', 'Categorie created successfully.');
    }

}
