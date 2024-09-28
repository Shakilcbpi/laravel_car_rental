<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::where('availability', true)->get();
        return view('frontend.cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('frontend.cars.show', compact('car'));
    }
}
