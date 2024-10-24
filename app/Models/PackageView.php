<?php

namespace App\Models;

use App\Models\Packages\FreePackage;
use App\Models\Packages\PackageCategory;
use App\Models\Packages\PackageFeatures;
use App\Models\Packages\PackageTemplate;
use App\Models\Packages\PaidPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Translatable\HasTranslations;

class PackageView extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'packages_view';

    public $translatable = ['name'];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function features()
    {
        return $this->belongsToMany(Feature::class, 'package_features', 'package_id', 'package_feature_id', 'id', 'id')
            ->withPivot(['value']);
    }

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
        return $this->hasMany(FreePackage::class, 'package_id');
    }

    public function paidPackages()
    {
        return $this->hasMany(PaidPackage::class, 'package_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function category()
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id');
    }
}
