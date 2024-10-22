<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class SuccessPartner extends Model
{
    use HasFactory;


    //fillable columns in success_partner_icons table
    protected $fillable = [
        'title',
        'image',
        'sort',
        'link',
        'link_status',
        'status',
    ];

    protected $casts = [
        'status' => 'integer',
        'sort' => 'integer',
        ];
    public
    function image(): Attribute
    {
        return new Attribute(
            get: fn($value) => Storage::url($value),
        );
    }

}
