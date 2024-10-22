<?php

namespace App\Models;

use App\Models\Packages\Package;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory , SoftDeletes , HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'iso2',
        'iso3',
        'country_numeric',
        'country_code',
        'flag',
        'currency',
        'currency_id',
        'language_id',
        'status',
        'created_by',
        'updated_by',
    ];
    protected $hidden = [
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    protected $casts = [
        'status'=>'integer'
    ];

    public function flag() : Attribute
    {
        return new Attribute(
            get:fn($value) => Storage::url($value),
        );
    }
    public function setTranslation(string $key, string $locale, $value): self
    {
        $translations = $this->getTranslations($key);
        $translations[$locale] = $value;
        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        return $this;
    }

}
