<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function create()
    {
        return view('financial.create');
    }

    public function store(Request $request)
    {
        return back();
    }

    public function show($id)
    {
      //  $financial = Financial::findOrfail($id);
      //  return view('financial.show')->with(compact('financial'));

      return view('financial.show');
    }
}
