<?php
// ApiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;

class ApiController extends Controller
{
    public function index()
    {
        $games = Game::all(); // Haal alle gebruikers op uit de database

        return response()->json([
            'games' => $games
        ], 200, [], JSON_PRETTY_PRINT);

//        return view('api.index');

    }
}
