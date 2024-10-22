<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory , HasTranslations;

    protected $translatable = ['title','footer_description','home_meta_title','home_meta_description','home_meta_keywords'];
    public static $imagePath = "store/setting/";

    protected $fillable = [
        'header_logo',
        'footer_logo',
        'title',
        'mobile',
        'footer_description',
        'email',
        'home_meta_keywords',
        'home_meta_title',
        'home_meta_description',
        'sitemap',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',
        'whatsapp',
        'facebook_pixel',
        'google_tags',
    ];



}
