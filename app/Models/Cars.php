<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    
    protected $fillable = ['resident_id','model', 'board'];

    public function residence()
    {
        return $this->belongsTo('App\Models\Residence');
    }
}
