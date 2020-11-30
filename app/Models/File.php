<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['logo_name','logo_path'];

    public function condo()
    {
        return $this->belongsTo('App\Models\condo');
    }
}
