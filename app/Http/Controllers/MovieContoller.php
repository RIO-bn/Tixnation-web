<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Movie;
class MovieContoller extends Controller
{
    public function index(){
      
        $movies = Movie::get();
        return view('adminmovie', compact('movies'));
    }
      public function store(Request $request){
        $request->validate([
            "name" => "required",
            "price" => "required",
            "genre" => "required",
            "duration" => "required"

        ]);
        Movie::create([
            "name" => $request->name,
            "price" =>$request->price,
            "genre" =>$request->genre,
            "duration" =>$request->duration
        ]);

        return redirect()->route('adminmovie');
    }
    public function destroy(Request $request,$id){
       $studio = Movie::findOrFail($id); // Find the studio by its ID
    $studio->delete();
    return redirect()->route('adminmovie')->with('success', 'Movie berhasil dihapus.');
   }
     // ✅ NEW: Show edit form
    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('editmovie', compact('movie'));
    }

    // ✅ NEW: Handle update
    public function update(Request $request, $id){
        $request->validate([
            "name" => "required",
            "price" => "required",
            "genre" => "required",
            "duration" => "required"
        ]);

        $movie = Movie::findOrFail($id);
        $movie->update([
            "name" => $request->name,
            "price" => $request->price,
            "genre" => $request->genre,
            "duration" => $request->duration
        ]);

        return redirect()->route('adminmovie')->with('success', 'Movie berhasil diperbarui.');
    }
}
