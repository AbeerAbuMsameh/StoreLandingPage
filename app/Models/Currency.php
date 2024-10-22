<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'name',
        'code',
        'symbol',
        'status',
    ];

    protected $hidden = [
        'updated_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts = [
        'status' => 'integer',
    ];
}
