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

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }

        $movie->update($request->all());

        return response()->json([
            'message' => 'Pelicula actualizada correctamente',
            'data' => $movie
        ],200);

        }

        public function destroy($id) {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
        $movie->delete();
        return response()->json(
            ['message' => 'Pelicula eliminada correctamente'], 200);

        }
}
