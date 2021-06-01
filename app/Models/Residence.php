<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = ['complement', 'condo_id', 'owner_id', 'occupied'];

    public function condos()
    {
        return $this->belongsTo('App\Models\Condos');
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }


}
