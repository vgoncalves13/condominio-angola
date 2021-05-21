<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Condo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function create($condo_id)
    {
        return view('file.create')->with(compact('condo_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         File::UploadFile($request);
         Session::flash('message',__('Adicionado com sucesso'));
    
         return back();

    }


    public function show()
    {
       //
    }

}