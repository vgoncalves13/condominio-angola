<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    protected $fillable = ['bill_mont', 'bill_value', 'condo_percentage', 'bill_name', 'bill_path', 'condo_id'];


    public function condo()
    {
        return $this->belongsTo('App\Models\condo');
    }
}
