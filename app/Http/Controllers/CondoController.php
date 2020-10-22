<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Condo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CondoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $condos = Condo::with('address.city')->get();
        return view('condo.index')->with(compact('condos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->pluck('city','id');
        return view('condo/create')->with(compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condo = Condo::create($request->all());
        $condo->address()->create($request->all());
        Session::flash('message',__('message.condo_created'));
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condo = Condo::with('address.city')->findOrfail($id);
        return view('condo.show')->with(compact('condo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function edit(Condo $condo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condo $condo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condo $condo)
    {
        //
    }
}
