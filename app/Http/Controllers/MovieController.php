<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function showMovies()
    {
        $movies = Movie ::all();
        return response()->json($movies);
    }

    public function showById($id)
    {
        $movies = Movie::find($id);

        if (!$movies) {
            return response()->json(['message' => 'Movie not found'], 404);
        }
        return response()->json($movies);
    }

    public function strore(Request $request)
    {
        $newMovie = Movie::create($request->all());
        return response()->json([
'message' => 'Movie created successfully',
'data' => $newMovie

        ],201);
    }

}
