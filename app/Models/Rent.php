<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'residence_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function createRent($user_id, $residence_id)
    {
        $rent = new Rent();
        $rent->user_id = $user_id;
        $rent->residence_id  = $residence_id;
        $rent->save();

        return $rent;
    }

    public function createTenant($user_id, $residence_id)
    {
        $rent = $this->createRent($user_id, $residence_id);
        return $rent;
    }



}
