<?php

namespace App\Models;

use App\Models\Packages\FreePackage;
use App\Models\Packages\Package;
use App\Models\Packages\PaidPackage;
use App\Models\Packages\PaidPackageDuration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VendorSubscription extends Model
{
    use HasFactory;


    protected $fillable = [
        'paid_package_id',
        'free_package_id',
        'paid_duration_id',
        'type',
        'vendor_id',
        'start_at',
        'expire_at',
        'paid_amount',
        'status',
        'reason',
    ];

    protected $casts = [
        'status' => 'integer',
        'expire_at' => 'date',
        'start_at' => 'date',

    ];


    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id','id')->withTrashed();
    }

    public function paymentDetails(): HasOne
    {
        return $this->hasOne(PaymentHistory::class, 'subscription_id','id');
    }



    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
    public function paidPackage()
    {
        return $this->belongsTo(PaidPackage::class, 'paid_package_id');
    }

    public function freePackage()
    {
        return $this->belongsTo(FreePackage::class, 'free_package_id');
    }

    public function paidDuration()
    {
        return $this->belongsTo(PaidPackageDuration::class, 'paid_duration_id');
    }

}
