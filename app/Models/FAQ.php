<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Translatable\Events\TranslationHasBeenSetEvent;
use Spatie\Translatable\HasTranslations;

class FAQ extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'faq';
    public $translatable = ['question', 'answer'];

    protected $fillable = [
        'question',
        'answer',
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
        'sort' => "integer",
        'status' => "integer",
    ];
    public function setTranslation(string $key, string $locale, $value): self
    {
        $translations = $this->getTranslations($key);
        $translations[$locale] = $value;
        $this->attributes[$key] = json_encode($translations, JSON_UNESCAPED_UNICODE);
        return $this;
    }
}
