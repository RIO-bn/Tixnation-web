<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class StudioController extends Controller
{

    public function index(Request $request){
        $studios = Studio::get();
        return view('adminstudio', compact('studios'));
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required"
        ]);
        Studio::create([
            "name" => $request->name
        ]);

        return redirect()->route('adminstudio');
    }
    public function destroy(Request $request,$id){
       $studio = Studio::findOrFail($id); // Find the studio by its ID
    $studio->delete();
    return redirect()->route('adminstudio')->with('success', 'Studio berhasil dihapus.');
   }
    public function edit($id){
        $studio = Studio::findOrFail($id);
        return view('editstudio', compact('studio'));
    }

    // Update the studio
    public function update(Request $request, $id){
        $request->validate([
            "name" => "required"
        ]);

        $studio = Studio::findOrFail($id);
        $studio->update([
            "name" => $request->name
        ]);

        return redirect()->route('adminstudio')->with('success', 'Studio berhasil diperbarui.');
    }
}
