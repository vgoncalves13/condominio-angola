<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'occupation', 'age', 'resident_id'];

    public function resident()
    {
        return $this->belongsTo('App\Models\Resident');
    }

    public function createEmployee(Request $request)
    {
        $employee = $this->create($request->all());
        return $employee;
    }
}
