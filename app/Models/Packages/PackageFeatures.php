<?php

namespace App\Models\Packages;

use App\Models\PackageFeature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'package_feature_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function feature()
    {
        return $this->belongsTo(PackageFeature::class, 'package_feature_id');
    }
}
