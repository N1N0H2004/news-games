<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreArtikelRequest;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Game;
use App\Models\Photo;


use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all()->sortBy('created_at');

        return view('artikels.index', compact('artikels'));
    }


    public function create(Artikel $artikel)
    {
        $tags = Tag::all();
        $games = Game::all();
        $categories = Category::all();
        $photos = Photo::all();

        return view('artikels.create', compact('artikel', 'tags', 'games', 'categories', 'photos'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titel' => 'required',
            'inhoud' => 'required',
            'tag_id' => 'required',
            'game_id' => 'required',
            'categorie_id' => 'required',
            'photo_id' => 'required',
        ]);


        Artikel::create([
            'titel' => $request->titel,
            'inhoud' => $request->inhoud,
            'tag_id' => $request->tag_id,
            'game_id' => $request->game_id,
            'categorie_id' => $request->categorie_id,
            'photo_id' => $request->photo_id,
        ]);

        return redirect()->route('artikels.index')->with('success', 'Article created successfully.');
    }

    public function destroy(Artikel $artikel)
    {
        try {
            $artikel->delete();
            return redirect()->route('artikels.index')->with('warning', 'Article delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', 'An error occurred while deleting the article.');
        }
    }

    public function edit(Artikel $artikel)
    {
        $tags = Tag::all();
        $games = Game::all();
        $categories = Category::all();
        $photos = Photo::all();

        return view('artikels.edit', compact('artikel', 'tags', 'games', 'categories', 'photos'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'titel' => 'required',
            'inhoud' => 'required',
            'tag_id' => 'required',
            'game_id' => 'required',
            'categorie_id' =>  'required',
            'photo_id' =>  'required',
        ]);

        $artikel->update([
            'titel' => $request->titel,
            'inhoud' => $request->inhoud,
            'tag_id' => $request->tag_id,
            'game_id' => $request->game_id,
            'categorie_id' => $request->categorie_id,
            'photo_id' => $request->photo_id,
        ]);

        return redirect()->route('artikels.index')->with('info', 'Article edited successfully.');
    }

    public function show(Artikel $artikel)
    {

        return view('artikels.show', compact('artikel'));
    }
}
