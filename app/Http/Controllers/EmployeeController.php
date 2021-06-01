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
            //$request->session()->forget('resident_id');
            return redirect(route('condos.show'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$resident_id = $request->session()->get('resident_id');
        $number_emp = $request->session()->get('number_emp');
        $request->session()->forget('number_emp');
        //$request->session()->forget('resident_id');
        $this->employee->createEmployee($request, $number_emp);
        return redirect(route('condos.index'));

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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrfail($id);
        $employee->fill($request->all())->save();
        Session::flash('message',__('Funcionário atualizado com sucesso'));
        Session::flash('alert-class', 'alert-success');
        return redirect('admin/condos');
    }


}
