<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Food;


class FoodController extends Controller
{
    public function index(){
        $foods = Food::get();
         return view('adminfood', compact('foods'));
    }

     public function store(Request $request){
        $request->validate([
            "name" => "required",
            "price" => "required",
           
        ]);
        Food::create([
            "name" => $request->name,
            "price" =>$request->price,
           
        ]);

        return redirect()->route('adminfood');
    }
     public function destroy(Request $request,$id){
       $studio = Food::findOrFail($id); // Find the studio by its ID
    $studio->delete();
    return redirect()->route('adminfood')->with('success', 'Makanan berhasil dihapus.');
   }
    // ✅ NEW: Show edit form
    public function edit($id){
        $food = Food::findOrFail($id);
        return view('editfood', compact('food'));
    }

    // ✅ NEW: Handle update
    public function update(Request $request, $id){
        $request->validate([
            "name" => "required",
            "price" => "required",
        ]);

        $food = Food::findOrFail($id);
        $food->update([
            "name" => $request->name,
            "price" => $request->price,
        ]);

        return redirect()->route('adminfood')->with('success', 'Makanan berhasil diperbarui.');
    }

}
