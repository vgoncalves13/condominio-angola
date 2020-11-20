<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cars extends Model
{
    use HasFactory;
    
    protected $fillable = ['resident_id','model', 'board'];

    public function residence()
    {
        return $this->belongsTo('App\Models\Residence');
    }

    public function createCar(Request $request)
    {
        $car = $this->create($request->all());
        return $car;
    }
}

