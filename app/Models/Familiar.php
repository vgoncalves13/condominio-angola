<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Familiar extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'relationship', 'age', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function createFamiliar(Request $request, $user_id, $quantity = 1)
    {
        for($i=0;$i<$quantity;$i++){
            $familiar = new Familiar();
            $familiar->name = $request->name[$i];
            $familiar->age = $request->age[$i];
            $familiar->relationship = $request->relationship[$i];
            $familiar->user_id = $user_id;
            $familiar->save();
        }

    }

}
