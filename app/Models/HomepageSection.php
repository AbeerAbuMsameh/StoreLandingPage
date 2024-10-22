<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class HomepageSection extends Model
{
    use HasFactory , softDeletes , HasTranslations;

    public $translatable = ['title','description','link','image_alt','button_name'];

    //fillable columns in homepage_sections table
    protected $fillable = [
        'section_id',
        'title',
        'description',
        'image_rtl',
        'image_ltr',
        'image_alt',
        'link',
        'sort',
        'status',
        'button_name',
    ];



    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function icons()
    {
        return $this->hasMany(HomepageSectionIcon::class, 'homepage_section_id');
    }


}
