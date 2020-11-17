<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address','address2','district','postal_code','city_id','condo_id'];

    public function condo()
    {
        return $this->belongsTo('App\Models\Condo');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}