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

    public function createFamiliar(Request $request, $resident_id, $quantity = 1)
    {
        for($i=0;$i<$quantity;$i++){
            $familiar = new Familiar();
            $familiar->name = $request->name[$i];
            $familiar->age = $request->age[$i];
            $familiar->relationship = $request->relationship[$i];
            $familiar->resident_id = $resident_id;
            $familiar->save();
        }
        
    }

}