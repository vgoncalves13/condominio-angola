<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    protected $employee;

    function __construct(Employee $employee)
    {
        $this->$employee = new Employee();
    }

    public function store(Request $request)
    {
        $employeee = new Employee();
        $employeee->fill($request->all());
        $employeee->save();
    }
}