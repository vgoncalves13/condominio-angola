<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familiar extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'occupation', 'age', 'resident_id'];

    public function resident()
    {
        return $this->belongsTo('App\Models\Resident');
    }
}
