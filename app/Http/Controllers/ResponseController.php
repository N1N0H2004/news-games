<?php
// ApiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ResponseController extends Controller
{
    public function index()
    {
//        $games = Game::all();

        //        return response()->json([
        //            'games' => $games
        //        ], 200, [], JSON_PRETTY_PRINT);

        return view('response.index');

    }
}
