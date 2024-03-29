<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{

    protected $employee;

    function __construct(Employee $employee)
    {
        $this->employee = new Employee();
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
        $number_emp = $request->session()->get('number_emp');
        if($number_emp > 0){
            return view('employee.create')->with(compact('number_emp'));
        }
        else{
            $request->session()->forget('number_emp');
            $request->session()->forget('user_id');
            Session::flash('message',__('message.residence_created'));
            Session::flash('alert-class', 'alert-success');
            return redirect(route('condos.show',\session()->get('condo_id')));
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
        $number_emp = $request->session()->get('number_emp');
        $this->employee->createEmployee($request, $user_id, $number_emp);
        $request->session()->forget('number_emp');
        $request->session()->forget('user_id');
        Session::flash('message',__('message.residence_created'));
        Session::flash('alert-class', 'alert-success');
        return redirect(route('condos.show',\session()->get('condo_id')));

    }

    public function edit(Employee $employee)
    {
        return view('employee.edit')->with(compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::with('user.owner.residences')->findOrfail($id);
        $employee->fill($request->all())->save();
        Session::flash('message',__('Funcionário atualizado com sucesso'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('residences.show',$employee->user->owner->residence->id);
    }


}
