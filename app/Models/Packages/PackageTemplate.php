<?php

namespace App\Models\Packages;

use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'template_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }
}
