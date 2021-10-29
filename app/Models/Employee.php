<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'occupation', 'age', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createEmployee(Request $request, $user_id, $quantity = 1)
    {
        for($i=0;$i<$quantity;$i++){
            $employee = new Employee();
            $employee->name = $request->name[$i];
            $employee->age = $request->age[$i];
            $employee->occupation = $request->occupation[$i];
            $employee->user_id = $user_id;
            $employee->save();
        }

    }
}
