<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $with = ['condos'];

    public function condos()
    {
        return $this->belongsToMany(Condo::class,'condo_service_provider');
    }

    public function financials()
    {
        return $this->hasMany(Financial::class);
    }
}
