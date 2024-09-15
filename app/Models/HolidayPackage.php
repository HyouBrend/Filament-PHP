<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayPackage extends Model
{
    use HasFactory;
    protected $table = 'holiday_packages';

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
