<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Request $request)
    {
        $search = trim((string) $request->query('q', ''));

        $songs = Song::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($inner) use ($search) {
                    $inner->where('title', 'like', "%{$search}%")
                        ->orWhere('artist', 'like', "%{$search}%")
                        ->orWhere('genre', 'like', "%{$search}%");
                });
            })
            ->orderBy('title')
            ->paginate(6)
            ->withQueryString();

        return view('jelajahi', compact('songs', 'search'));
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }
}
