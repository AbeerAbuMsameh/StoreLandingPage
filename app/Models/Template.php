<?php

namespace App\Models;

use App\Models\Packages\Package;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Template extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $table = 'templates';
    public $translatable = ['name', 'description'];

    protected $fillable = [
        'name',
        'description',
        'template_category_id',
        'sort',
        'banner_length',
        'banner_width',
        'sub_banner_length',
        'sub_banner_width',
        'header_logo_length',
        'header_logo_width',
        'footer_logo_length',
        'footer_logo_width',
        'app_logo_length',
        'app_logo_width',
        'categories_length',
        'categories_width',
        'products_length',
        'products_width',
        'rtl_image',
        'rtl_link',
        'ltr_image',
        'ltr_link',
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

    protected $casts = [
        "template_category_id" => "integer",
        "sort" => "float",
        "banner_length" => "float",
        "banner_width" => "float",
        "sub_banner_length" => "float",
        "sub_banner_width" => "float",
        "header_logo_length" => "float",
        "header_logo_width" => "float",
        "footer_logo_length" => "float",
        "footer_logo_width" => "float",
        "app_logo_length" => "float",
        "app_logo_width" => "float",
        "categories_length" => "float",
        "categories_width" => "float",
        "products_length" => "float",
        "products_width" => "float",
        "status" => "integer"
    ];

    public function packageFeatures()
    {
        return $this->belongsToMany(PackageFeature::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_templates');
    }

    public function templateCategory()
    {
        return $this->belongsTo(TemplateCategory::class);
    }

    public function templateRtlMedia()
    {
        return $this->hasMany(TemplateMedia::class)->where('type', 'rtl');
    }

    public
    function templateLtrMedia()
    {
        return $this->hasMany(TemplateMedia::class)->where('type', 'ltr');
    }

    public function imageKey(): Attribute
    {
        return new Attribute(

            get: function () {
                $lang = Language::where('code', app()->getLocale())
                    ->where('status', true)
                    ->first();

                if ($lang) {
                    return $lang->is_rtl ? $this->rtl_image : $this->ltr_image;
                }

                return $this->image_ltr;
            });
    }

    public function setTranslation(string $key, string $locale, $value): self
    {
        $translations = $this->getTranslations($key);
        $translations[$locale] = $value;
        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        return $this;
    }
}
