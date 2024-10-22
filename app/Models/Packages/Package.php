<?php

namespace App\Models\Packages;

use App\Models\Country;
use App\Models\VendorSubscription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'num_of_category',
        'num_of_product',
        'color',
        'best_selling',
        'is_free',
        'status',
    ];

    public function setTranslation(string $key, string $locale, $value): self
    {
        $translations = $this->getTranslations($key);
        $translations[$locale] = $value;
        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        return $this;
    }


    public function vendorSubscriptions()
    {
        return $this->hasMany(VendorSubscription::class, 'package_id');
    }

    public function packageFeatures()
    {
        return $this->hasMany(PackageFeatures::class, 'package_id');
    }

    public function packageTemplates()
    {
        return $this->hasMany(PackageTemplate::class, 'package_id');
    }

    public function freePackages()
    {
        return $this->hasMany(FreePackage::class ,'package_id');
    }

    public function paidPackages()
    {
        return $this->hasMany(PaidPackage::class ,'package_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class ,'country_id');
    }

}
