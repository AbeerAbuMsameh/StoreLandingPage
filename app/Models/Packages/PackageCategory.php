<?php

namespace App\Models\Packages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class PackageCategory extends Model
{
    use HasFactory , softDeletes , HasTranslations;

    public $translatable = ['name'];


    //fillable columns in package_categories table
    protected $fillable = [
        'name',
        'sort',
        'status',
        'is_selected',
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function freePackages()
    {
        return $this->hasMany(FreePackage::class, 'package_category_id');
    }

    public function paidPackages()
    {
        return $this->hasMany(PaidPackage::class, 'package_category_id');
    }

}
