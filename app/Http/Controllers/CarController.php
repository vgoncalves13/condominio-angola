<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{

    protected $car;

    function __construct(Car $car)
    {
        $this->car = new Car();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $number_cars = $request->session()->get('number_cars');
        if($number_cars > 0){
            return view('car.create')->with(compact('number_cars'));
        }
        else {
            $request->session()->forget('number_cars');
            return redirect()->route('familiars.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $residence_id = $request->session()->get('residence_id');
        $number_cars = $request->session()->get('number_cars');
        $request->session()->forget('number_cars');
        $this->car->createCar($request, $residence_id, $number_cars);

        return redirect()->route('familiars.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car.edit')->with(compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::findOrfail($id);
        $car->fill($request->all())->save();
        Session::flash('message',__('Viatura atualizada com sucesso'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('residences.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
