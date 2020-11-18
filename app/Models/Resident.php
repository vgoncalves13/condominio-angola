<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = ['document', 'birth_date'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function familiar()
    {
        return $this->hasMany('App\Models\Familiar');
    }

}
