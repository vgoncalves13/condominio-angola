<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Condo;

class Financial extends Model
{
    use HasFactory;

    protected $fillable = [
        'condo_id',
        'service_provider_id',
        'bill_name',
        'bill_month',
        'bill_value',
        'bill_path',
        'bill_type'
    ];


    /**
     * Return bill date in angolan format DMY.
     *
     * @param  string  $value
     * @return string
     */
    public function getBillMonthAttribute($value)
    {
        return Carbon::parse($value)->format('M');
    }

    /**
     * Get bill value in angolan format.
     *
     * @param  string  $value
     * @return string
     */
    public function getBillValueAttribute($value)
    {
        $bill_value = floatval($value);
        return sprintf('%01.2f Kz',$bill_value);
    }

    /**
     * Relationship
     */
    public function condo()
    {
        return $this->belongsTo(Condo::class);
    }

    public function service_provider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function residences()
    {
        return $this->belongsToMany(Residence::class)->withPivot('spent');
    }

    public static function UploadBill(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('storage/bills/'), $fileName);

        $bill_path = 'storage/bills/' .$fileName;
//
//        $financial = Financial::create([
//                'bill_path' => $bill_path,
//                'condo_id' => $request->condo_id,
//            ])->fill($request->all());

        $financial = Financial::create($request->all());
        $financial->fill([
            'bill_path' => $bill_path,
        ]);
        $financial->save();

        return $financial;
    }

    public function getFinancialDivision(Financial $financial)
    {
        $value = $financial->getRawOriginal('bill_value');
        $residences_quantity = $this->condo->getSumResidences();

        return $value / $residences_quantity;
    }

    public function getFinancialIndividual(Financial $financial)
    {
        $value = $financial->getRawOriginal('bill_value');
        $finanacial_residence = FinancialResidence::where('financial_id', $financial->id)->get();
    }
}
