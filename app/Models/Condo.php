<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Condo extends Model
{
    use HasFactory;

    protected $fillable = ['name','address_id','email'];

    public function address()
    {
        return $this->hasOne('App\Models\Address');
    }

    public function residences()
    {
        return $this->hasMany('App\Models\Residence');
    }

    public function file()
    {
        return $this->hasOne('App\Models\File');
    }

    public function financials()
    {
        return $this->hasMany(Financial::class);
    }

    public function serviceProviders()
    {
        return $this->belongsToMany(ServiceProvider::class);
    }

    public function getSumResidences()
    {
        return $this->residences()->count();
    }
}
