<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



class File extends Model
{
    use HasFactory;

    protected $fillable = ['condo_id', 'file_name','file_path'];

    public function condos()
    {
        return $this->belongsTo('App\Models\Condos');
    }

    public static function UploadFile(Request $request)
    {
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,pdf|',
        ]);

        $file_name = time().'.'.$request->file->extension();
               
        $request->file->move(public_path('storage/logos'), $file_name);

        $file_path = 'storage/logos/' . $file_name;
  
        File::create(['file_name' => $file_name, 
                'file_path' => $file_path,
                'condo_id' => $request->condo_id
                ])->fill($request->all())->save();

    }

}
