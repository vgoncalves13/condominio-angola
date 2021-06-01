<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use App\Models\Condo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FinancialController extends Controller
{

    public function index()
    {
        $financials = Financial::get();
        return view('financial.index')->with(compact('financials'));
    }


    public function create(int $condo_id)
    {
        return view('financial.create')->with(compact('condo_id'));
    }

    public function store(Request $request)
    {
        Financial::UploadBill($request);
        Session::flash('message',__('message.bill_created'));
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    public function show(int $condo_id)
    {
        $financials = Financial::where('condo_id',$condo_id)->get();
        $condo = Condo::findOrFail($condo_id);
        return view('financial.show',compact('condo','financials'));
    }
}
