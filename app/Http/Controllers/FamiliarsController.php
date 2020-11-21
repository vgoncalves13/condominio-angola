<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familiar;

class FamiliarsController extends Controller
{
    protected $familiar;

    function __construct(Familiar $familiar)
    {
        $this->$familiar = new Familiar();
    }

    public function store(Request $request)
    {
        $familiar = new Familiar();
        $familiar->fill($request->all());
        $familiar->save();
    }
}