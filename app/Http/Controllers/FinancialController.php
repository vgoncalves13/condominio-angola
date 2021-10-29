<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancialRequest;
use App\Models\Financial;
use App\Models\Condo;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FinancialController extends Controller
{
    protected $financial;

    public function __construct()
    {
        $this->financial = new Financial();
    }

    public function index()
    {
        $financials = Financial::get();
        return view('financial.index')->with(compact('financials'));
    }


    public function create(int $condo_id)
    {
        $service_providers = DB::table('service_providers')->pluck('name','id');
        return view('financial.create')->with(compact('condo_id','service_providers'));
    }

    public function store(FinancialRequest $request)
    {
        $financial = Financial::UploadBill($request);
        Session::flash('message',__('message.bill_created'));
        Session::flash('alert-class', 'alert-success');
        return (redirect(route('financials.show',$financial->condo->id)));
    }

    public function show(int $condo_id)
    {
        $financials = Financial::where('condo_id',$condo_id)->get();
        $condo = Condo::findOrFail($condo_id);
        return view('financial.show',compact('condo','financials'));
    }

    public function details(Financial $financial)
    {
        if ($financial->type == 'division'){
            $division = $financial->getFinancialDivision($financial);
            return view('financial.details_division',compact('division','financial'));
        }else{
            return view('financial.details_individual',compact('financial'));
        }

    }
}
