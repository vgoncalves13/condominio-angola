<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancialResidenceRequest;
use App\Models\FinancialResidence;
use Illuminate\Support\Facades\Session;

class FinancialResidenceController extends Controller
{
    public function store(FinancialResidenceRequest $request)
    {
        $total_reading_input=0;
        foreach ($request->residence_id as $key => $value){
            $financial_residente = FinancialResidence::updateOrCreate(
                ['financial_id' => $request->financial_id, 'residence_id' => $key],
                ['reading' => $value]
            );
            $total_reading_input = $total_reading_input + $financial_residente->reading;
        }
        if ($total_reading_input > $request->reading){
            Session::flash('message',__('message.error_total_reading'));
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }elseif ($total_reading_input < $request->reading){
            Session::flash('message',__('message.warning_total_reading'));
            Session::flash('alert-class', 'alert-warning');
            return (redirect(route('financials.details',$request->financial_id)));
        }else{
            Session::flash('message',__('message.success'));
            Session::flash('alert-class', 'alert-success');
            return (redirect(route('financials.details',$request->financial_id)));
        }
    }
}
