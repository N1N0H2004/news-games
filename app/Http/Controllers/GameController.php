<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreArtikelRequest;
use App\Models\Artikel;
use App\Models\Tag;
use App\Models\Categorie;
use App\Models\Game;


use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all()->sortBy('created_at');

        return view('games.index', compact('games'));
    }

    public function create(Game $game)
    {
        $games = Game::all();
        $tags = Tag::all();

        return view('games.create', compact('game', 'games', 'tags'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'foto' => 'required',
            'tag_id' => 'required',
        ]);

        $foto = "/images/" . $request->foto;

        Game::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'foto' => $foto,
            'tag_id' => $request->tag_id,
        ]);

        return redirect()->route('games.index')->with('success', 'game created successfully.');
    }



//    public function store(Request $request)
//    {
//        $request->validate([
//            'naam' => 'required',
//            'beschrijving' => 'required',
//            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'tag_id' => 'required',
//        ]);
//
//        $fotoNaam = time() . '.' . $request->foto->extension();
//        $request->foto->move(public_path('images'), $fotoNaam);
//        $fotoPad = '/images/' . $fotoNaam;
//
//        Game::create([
//            'naam' => $request->naam,
//            'beschrijving' => $request->beschrijving,
//            'foto' => $fotoPad,
//            'tag_id' => $request->tag_id,
//        ]);
//
//        return redirect()->route('games.index')->with('success', 'Game created successfully.');
//    }







    public function destroy(Game $game)
    {
        try {
            $game->delete();
            return redirect()->route('games.index')->with('warning', 'Game delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the game.');
        }
    }


    public function edit(Game $game)
    {
        $games = Game::all();
        $tags = Tag::all();

        return view('games.edit', compact('game', 'games', 'tags'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'foto' => 'required',
            'tag_id' => 'required',
        ]);

        $foto = "/images/" . $request->foto;

        $game->update([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'foto' => $foto,
            'tag_id' => $request->tag_id,
        ]);

        return redirect()->route('games.index')->with('success', 'Game created successfully.');
    }


    public function show(Game $game)
    {
        return view('games.show', compact('game'));

    }

}
