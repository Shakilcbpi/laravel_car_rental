<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function create(Car $car)
    {
        return view('frontend.rentals.create', compact('car'));
    }

    public function store(Request $request)
    {
        $car = Car::find($request->car_id);
        
        // Check if the car is available for the selected dates
        // Calculate total cost and create rental

        return redirect()->route('rentals.index');
    }

    public function index()
    {
        $rentals = auth()->user()->rentals;
        return view('frontend.rentals.index', compact('rentals'));
    }

    public function cancel(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index');
    }
}
