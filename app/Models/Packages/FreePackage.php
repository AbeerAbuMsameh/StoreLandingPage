<?php

namespace App\Models\Packages;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class FreePackage extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'is_limited',
        'duration',
        'duration_unit',
        'package_id',
        'country_id',
        'package_category_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class ,'package_id');
    }

    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class ,'package_category_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class ,'country_id');
    }
}

