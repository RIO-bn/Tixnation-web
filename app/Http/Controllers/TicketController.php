<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(Request $request )
    {
        $userId = Auth::id();
        
        $orders = Order::where('user_id',$userId)
            ->orderBy('created_at', 'asc')
            ->with(['movie','schedule','studio','orderFoods.food'])

            ->get();
           
   

        return view('index', compact('orders',));
    }
    public function destroy($id)
    {
    $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    $order->orderFoods()->delete();
    $order->delete();
      return redirect()->back()->with('success', 'Ticket has been successfully destroyed.');

   
    }
}