<?php
// Apiv2Controller.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Http facade
use App\Models\Game;

class Apiv2Controller extends Controller
{
    public function index()
    {
        // Fetch game data from the API
        $response = Http::get('http://127.0.0.1:8000/apis');

        // Check if request was successful and response contains data
        if ($response->successful()) {
            $games = $response->json(); // Extract JSON data
            return view('apiv2.index', ['games' => $games]);
        } else {
            return "Failed to fetch game data from API.";
        }
    }
}
?>
