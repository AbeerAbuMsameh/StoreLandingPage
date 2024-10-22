<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Help extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $table = 'helps';

    public $translatable = ['subject', 'description', 'link'];

    protected $fillable = [
        'icon',
        'parent_id',
        'subject',
        'link',
        'description',
        'type',
        'sort',
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
        'status' => 'integer',
        'sort' => 'integer',
    ];

    public function icon(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value ? Storage::url($value) : null,
        );
    }

    public function media()
    {
        return $this->hasMany(HelpMedia::class);
    }

    public function parent()
    {
        return $this->belongsTo(Help::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Help::class,'parent_id');
    }
    public function setTranslation(string $key, string $locale, $value): self
    {
        $translations = $this->getTranslations($key);
        $translations[$locale] = $value;
        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        return $this;
    }
}
