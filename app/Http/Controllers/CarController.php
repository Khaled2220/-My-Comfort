<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
     public function __construct(private CarService $carService)
    {
        //
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(StoreCarRequest $request)
    {
        //
    }

    public function show(Car $car)
    {
        //
    }

    public function edit(Car $car)
    {
        return view('car.edit')->with(['car' => $car,]);
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    public function destroy(Car $car)
    {
        //
    }
}
