<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['residence_id','model', 'car_plate'];

    public function residence()
    {
        return $this->belongsTo('App\Models\Residence');
    }

    public function createCar(Request $request, $residence_id, $quantity = 1)
    {
        for($i=0;$i<$quantity;$i++){
            $car = new Car();
            $car->model = $request->model[$i];
            $car->car_plate = $request->car_plate[$i];
            $car->residence_id = $residence_id;
            $car->save();
        }
        
    }
}
