<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class HomepageSectionIcon extends Model
{
    use HasFactory , softDeletes , HasTranslations;

    public $translatable = ['title','description','link'];

    //fillable columns in homepage_section_icons table
    protected $fillable = [
        'title',
        'description',
        'image',
        'sort',
        'link',
        'status',
        'homepage_section_id',
    ];

    protected $casts = [
        'status' => 'integer',
        'sort' => 'integer',
        ];

}

