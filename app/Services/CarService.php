<?php

namespace App\Services;

use App\Models\Car;

class CarService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
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
}
