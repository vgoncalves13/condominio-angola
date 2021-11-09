<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialResidence extends Model
{
    use HasFactory;

    protected $table = 'financial_residence';

    protected $fillable = [
        'financial_id',
        'residence_id',
        'spent',
        'reading'
    ];


}
