<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //untuk menampilkan data keseluruhan
    public function index(){
        $movies = Movie::paginate(5);
        return view('movies.index',[
            'data' => $movies
        ]);
    }

    public function show($id){
        $movie = Movie::find($id);
        return $movie;
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'genres'=> 'required',
            'rating'=> 'required'
        ]);

        Movie::create([
            'name' => $request->name,
            'genres' => $request->genres,
            'rating' => $request->rating
        ]);

        return redirect('/movie');
    }

    public function edit(Request $request, $id){
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);
        $movie = Movie::find($id);
        $movie->update([
            'name' => $request->name,
            'genres' => $request->genres,
            'rating' => $request->rating,
        ]);
        return redirect('/movie');
    }

    public function destroy($id){
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movie');
        }
}
