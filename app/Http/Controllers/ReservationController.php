<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Schedule;
use App\Models\Studio;
use App\Models\Order;
use App\Models\OrderFood;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{

    
    public function index(Request $request)
    {
        // Fetch all movies
        $movies = Movie::all();
        $foods = Food::all();
        // Initialize empty collections
        $schedules = collect();
        $studios = collect();
        
        // Check if movie is selected
        if ($request->filled('movie_id')) {
            $schedules = Schedule::where('movie_id', $request->movie_id)->get();
        }

        // Check if schedule is selected and fetch studios
        if ($request->filled('movie_id') && $request->filled('schedule_id')) {
            $studios = Studio::whereHas('schedules', function ($query) use ($request) {
                $query->where('id', $request->schedule_id)
                      ->where('movie_id', $request->movie_id);
            })->get();
        }

        return view('Reservation', compact('movies', 'schedules', 'studios','foods'));
    }

    public function store(Request $request){
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'schedule_id' => 'required|exists:schedules,id',
            'studio_id' => 'required|exists:studios,id',
            'seats' =>'required|string',
            'foods' =>'nullable|array',
            'foods.*.id' => 'required_with:foods|exists:foods,id',
            'foods.*.quantity' => 'required_with:foods|integer|min:0',
            'total_price' => 'required|numeric|min:0'

        
        ]);
        
       
        DB::transaction(function () use ($request) {
            // Fetch movie price
            $movie = Movie::findOrFail($request->movie_id);
            $seatCount = count(explode(',', $request->seats));
            $ticketPrice = $movie->price * $seatCount;

            // Create Order
            $order = Order::create([
                'user_id' => Auth::id(),
                'movie_id' => $request->movie_id,
                'schedule_id' => $request->schedule_id,
                'studio_id' => $request->studio_id,
                'seats' => $request->seats,
                'total_price' => $request->total_price // Initial total price
            ]);

            $totalFoodPrice = 0;

            // If foods are selected, insert them into order_foods
            if ($request->has('foods')) {
                foreach ($request->foods as $food) {
                    if($food['quantity']>0){
                    $foodItem = Food::findOrFail($food['id']);
                    $foodTotal = $foodItem->price * $food['quantity'];
                    
                    
                    OrderFood::create([
                        'order_id' => $order->id,
                        'food_id' => $food['id'],
                        'quantity' => $food['quantity'],
                    ]);
                }
                }
            }
            

            // Update total price in order (including food)
            
        });

        return redirect()->route('Reservation')->with('success', 'Order placed successfully!');
    }


}