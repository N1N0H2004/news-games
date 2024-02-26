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

        return view('games.create', compact('game', 'games'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'naam',
            'beschrijving' => 'beschrijving',
            'foto' => 'foto',
            'tag_id' => 'required',
        ]);

        Game::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'foto' => $request->foto,
            'tag_id' => $request->tag_id,

        ]);

        return redirect()->route('games.index')->with('success', 'game created successfully.');
    }

    public function destroy(Game $game)
    {
        try {
            $game->delete();
            return redirect()->route('games.index')->with('warning', 'Game delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the news.');
        }
    }

}
