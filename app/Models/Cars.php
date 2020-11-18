<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = ['number_cars', 'resident_id'];

    public function residence()
    {
        return $this->belongsTo('App\Models\Residence');
    }
}
