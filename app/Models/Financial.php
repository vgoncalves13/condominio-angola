<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Financial extends Model
{
    use HasFactory;
    

    protected $fillable = ['condo_id', 'bill_name', 'bill_month', 'bill_value','bill_path'];


    public function condo()
    {
        return $this->belongsTo('App\Models\Condos');
    }

    public static function UploadBill(Request $request)
    {   
        
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        
        $fileName = time().'.'.$request->file->extension();
               
        $request->file->move(public_path('storage/bills/'), $fileName);

        $bill_path = 'storage/bills/' .$fileName;
        
        Financial::create(
            [
                'bill_path' => $bill_path,
                'condo_id' => $request->condo_id,
            ])->fill($request->all())->save();        

    }
}
