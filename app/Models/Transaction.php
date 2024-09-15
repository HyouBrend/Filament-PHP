<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'user_id',
        'holiday_package_id',
        'quantity',
        'total_price',
        'transaction_date',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function holidayPackage()
    {
        return $this->belongsTo(HolidayPackage::class);
    }
}