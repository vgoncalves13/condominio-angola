<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];
    protected $table = 'owners';

    public function residences()
    {
        return $this->hasMany('App\Models\Residence');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function isOwner(Request $request)
    {
        if ($request->owner == 'owner'){
            return true;
        }
        return false;
    }

    public function storeOwner($user_id)
    {
        $owner = new Owner();
        $owner->user_id = $user_id;
        if ($owner->save()){
            return $owner;
        }

    }

    public function createOwner(Request $request, $user_id)
    {
        if($this->isOwner($request)){
            return $this->storeOwner($user_id);
        }else {
            return back(500);
        }
    }



}



