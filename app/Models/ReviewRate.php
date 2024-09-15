<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRate extends Model
{
    use HasFactory;
    protected $table = 'review_rates';

    protected $fillable = [
        'user_id',
        'holiday_package_id',
        'rating',
        'comment',
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