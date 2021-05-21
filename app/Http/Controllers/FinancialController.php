<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use App\Models\Condo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{
    
    public function index()
    {
        $financials = Financial::get();
        return view('financial.index')->with(compact('financials'));
    }
    
    
    public function create($condo_id)
    {
        return view('financial.create')->with(compact('condo_id'));
    }

    public function store(Request $request)
    {   
        Financial::UploadBill($request);
        return back();
    }

    public function show($condo_id)
    {
        $financials = Financial::where('condo_id',$condo_id)->get();
        $condo_name = Condo::findOrfail($condo_id);
        return view('financial.show')->with(compact('financials','condo_name'));
    }
}
