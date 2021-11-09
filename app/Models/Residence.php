<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = ['complement', 'condo_id', 'occupied', 'owner_id'];

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

    public function financials()
    {
        return $this->belongsToMany(Financial::class)->withPivot(['spent','reading']);
    }

    public function rent()
    {
        return $this->hasOne(Rent::class);
    }

}
