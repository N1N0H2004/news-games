<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all()->sortBy('created_at');

        return view('photos.index', compact('photos'));
    }

    public function create(Photo $photo)
    {
        $photos = Photo::all();
        return view('photos.create', compact('photo', 'photos'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'naam' => 'required',
            'foto' => 'required',
        ]);

        $foto = "/images/" . $request->foto;

        Photo::create([
            'naam' => $request->naam,
            'foto' => $foto,
        ]);

        return redirect()->route('photos.index')->with('success', 'Photo created successfully.');
    }


    public function destroy(Photo $photo)
    {
        try {
            $photo->delete();
            return redirect()->route('photos.index')->with('warning', 'Photo delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'An error occurred while deleting the photos.');
        }
    }
}
