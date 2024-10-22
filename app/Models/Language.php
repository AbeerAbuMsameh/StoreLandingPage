<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Language extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'lang',
        'code',
        'flag',
        'is_rtl',
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
        'is_rtl' => 'integer',
        'status' => 'integer',
    ];

    public function flag() : Attribute
    {
        return new Attribute(
            get:fn($value) => Storage::url($value),
        );
    }


//    public function defaultCurrency() : Attribute {
//        return new Attribute(get:fn() => $this->asdasdasdad);
//
//    }
}
