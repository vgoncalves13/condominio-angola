<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['document', 'birth_date', 'username'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
