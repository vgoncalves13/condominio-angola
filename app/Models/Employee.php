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

    public function createEmployee(Request $request, $resident_id, $quantity = 1)
    {
        for($i=0;$i<$quantity;$i++){
            $employee = new Employee();
            $employee->name = $request->name[$i];
            $employee->age = $request->age[$i];
            $employee->occupation = $request->occupation[$i];
            $employee->resident_id = $resident_id;
            $employee->save();
        }
        
    }
}
