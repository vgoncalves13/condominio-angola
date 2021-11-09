<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familiar;
use Illuminate\Support\Facades\Session;


class FamiliarController extends Controller
{
    protected $familiar;

    function __construct(Familiar $familiar)
    {
        $this->familiar = $familiar;
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
     */

    public function create(Request $request)
    {
        $number_fam = $request->session()->get('number_fam');
        if($number_fam > 0){
            return view('familiar.create')->with(compact('number_fam'));
        }
        else{
            $request->session()->forget('number_fam');
            return redirect()->route('employees.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $number_fam = $request->session()->get('number_fam');
        $request->session()->forget('number_fam');
        $this->familiar->createFamiliar($request, $user_id, $number_fam);
        return redirect()->route('employees.create');

    }

    public function edit(Familiar $familiar)
    {
        return view('familiar.edit')->with(compact('familiar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     */
    public function update(Request $request, $id)
    {
        $familiar = Familiar::findOrfail($id);
        $familiar->fill($request->all())->save();
        Session::flash('message',__('Familiar atualizado com sucesso'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('residences.show',$id);
    }

}
