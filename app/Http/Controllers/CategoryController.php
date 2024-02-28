<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreArtikelRequest;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Game;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->sortBy('created_at');

        return view('categories.index', compact('categories'));
    }

    public function create(Category $categorie)
    {
        $categories = Tag::all();

        return view('categories.create', compact('categorie', 'categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'required',
        ]);

        Category::create([
            'naam' => $request->naam,
        ]);

        return redirect()->route('categories.index')->with('success', 'Event created successfully.');
    }



    public function destroy(Category $categorie)
    {

        try {
            $categorie->delete();

            return redirect()->route('categories.index')->with('warning', 'Categorie delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the categorie.');
        }
    }


    public function edit(Category $categorie)
    {
        $categories = Category::all();

        return view('categories.edit', compact('categorie', 'categories'));
    }

    public function update(Request $request, Category $categorie)
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
