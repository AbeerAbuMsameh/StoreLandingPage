<?php

namespace App\Models\Packages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaidPackageDuration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'duration_unit',
        'duration',
        'discount',
        'discount_rate',
        'added_duration_unit',
        'added_duration',
        'status',
        'paid_package_id',
        'package_category_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class ,'package_id');
    }

    public function paidPackage()
    {
        return $this->belongsTo(PaidPackage::class ,'paid_package_id');
    }

    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class ,'package_category_id');
    }

    // Mutator to store discount_rate as a decimal in the database
    public function setDiscountRateAttribute($value)
    {
        $this->attributes['discount_rate'] = $value / 100;
    }

    // Accessor to retrieve discount_rate as a percentage
    public function getDiscountRateAttribute($value)
    {
        return $value * 100;
    }
}
