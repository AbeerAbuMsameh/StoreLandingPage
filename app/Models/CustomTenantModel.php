<?php

namespace App\Models;
use Spatie\Multitenancy\Models\Tenant;

class CustomTenantModel extends Tenant
{
    protected $table = 'tenants';
    protected $fillable = ['name', 'vendor_id', 'domain', 'database', 'username', 'password'];

    protected static function booted()
    {
        static::creating(fn(CustomTenantModel $model) => $model->createDatabase());
    }

    public function createDatabase()
    {
        // add logic to create database
    }
}
