<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = ['complement', 'condo_id'];
    
    public function condos()
    {
        return $this->belongsTo('App\Models\Condos');
    }

    public function resident()
    {
        return $this->belongsTo('App\Models\Resident');
    }

    public function cars()
    {
        return $this->hasMany('App\Models\Cars');
    }
}
