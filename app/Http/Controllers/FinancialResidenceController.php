<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancialResidenceRequest;
use App\Models\FinancialResidence;
use Illuminate\Support\Facades\Session;

class FinancialResidenceController extends Controller
{
    public function store(FinancialResidenceRequest $request)
    {
        foreach ($request->residence_id as $key => $value){
            FinancialResidence::updateOrCreate(
                ['financial_id' => $request->financial_id, 'residence_id' => $key],
                ['spent' => $value]
            );
        }
        Session::flash('message',__('message.success'));
        Session::flash('alert-class', 'alert-success');
        return (redirect(route('financials.details',$request->financial_id)));
    }
}
