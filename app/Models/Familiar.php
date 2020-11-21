<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class familiar extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'relationship', 'age', 'resident_id'];

    public function resident()
    {
        return $this->belongsTo('App\Models\Resident');
    }

    public function createFamiliar(Request $request)
    {
        $familiar = $this->create($request->all());
        return $familiar;
    }
}

