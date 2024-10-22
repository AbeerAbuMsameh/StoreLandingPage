<?php

namespace App\Models\Packages;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaidPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'monthly_price',
        'is_free_trial',
        'free_trial_duration',
        'status',
        'package_id',
        'country_id',
        'package_category_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class ,'package_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class ,'country_id');
    }

    public function durations()
    {
        return $this->hasMany(PaidPackageDuration::class);
    }

    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class ,'package_category_id');
    }
}
