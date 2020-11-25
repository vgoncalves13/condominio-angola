<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use App\Models\Resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ResidenceController extends Controller
{
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
    public function create($condo_id)
    {
        return view('residence.create')->with(compact('condo_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create_user($request);
        $resident = new Resident();
        $resident->user()->associate($user);
        $resident->fill($request->all());
        $resident->save();

        $residence = new Residence();
        $residence->resident()->associate($resident);
        $residence->fill($request->all());
        if($residence->save()){
            $request->session()->put('number_cars', $request->number_cars);
            $request->session()->put('number_fam', $request->number_fam);
            $request->session()->put('number_emp', $request->number_emp);
            $request->session()->put('residence_id', $residence->id);
            $request->session()->put('resident_id', $residence->resident_id);
            return redirect()->route('cars.create');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $residence = Residence::findOrfail($id);
        return view('residence.show')->with(compact('residence'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $residence = Residence::findOrfail($id);
        return view('residence.edit')->with(compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $residence = Residence::findOrfail($id);
        $residence->fill($request->all())->save();
        Session::flash('message',__('message.residence_updated'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('residences.show',$id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residence $residence)
    {
        //
    }
}
