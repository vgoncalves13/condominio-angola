<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    protected $car;

    function __construct(Cars $car)
    {
        $this->car = new Cars();
    }

    public function store(Request $request)
    {
        $cars = new Cars();
        $cars->fill($request->all());
        $cars->save();
    }
}
