<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = ['document', 'birth_date', 'username'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function familiars()
    {
        return $this->hasMany('App\Models\Familiar');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }


}
