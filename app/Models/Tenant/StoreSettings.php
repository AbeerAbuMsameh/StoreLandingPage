<?php

namespace App\Models\Tenant;

use App\Models\Currency;
use App\Models\Faq;
use App\Models\Language;
use App\Models\Media;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Template;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class StoreSettings extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $connection = 'tenant';

    protected $table = 'settings';

    public $translatable = ['title', 'description', 'home_meta_title', 'home_meta_description', 'home_meta_keywords'];

    public static $imagePath = "store/logos";
    /**
     * @var mixed|string
     */

    protected $fillable = [
        'app_logo',
        'footer_logo',
        'header_logo',
        'title',
        'store_key',
        'mobile',
        'phone_code',
        'description',
        'default_sku',
        'color',
        'notification_key',
        'currency',
        'language',
        'email',
        'domain',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',
        'whatsapp',
        'home_meta_keywords',
        'home_meta_title',
        'home_meta_description',
        'sitemap',
        'facebook_pixel',
        'google_tags',
        'country_id',
        'city_id',
        'street_address',
        'postal_code',
        'latitude',
        'longitude',
        'currently_sell',
        'many_product_have',
        'vendor_id',
        'subscription_id',
        'template_id',
        'identity_papers',
        'currency_id',
        'is_fixed_convert_rate',
        'converted_rate',
        'status',
        'is_maintenance',
        'is_alias',
        'language_id',
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];


    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    public function vendors()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class)
            ->with('templates')
            ->with('features');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function subscriptions()
    {
        return $this->hasOne(Subscription::class);
    }

    public function default_template()
    {
        return $this->hasOne(Template::class, 'id', 'template_id');
    }

    public function display_category()
    {
        return $this->belongsTo(DisplayCategory::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function page()
    {
        return $this->hasMany(Page::class);
    }

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

    public function slider()
    {
        return $this->hasMany(Slider::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function faq()
    {
        return $this->hasMany(Faq::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function address()
    {
        return $this->hasOne(StoreAddress::class);
    }

    public function getDomainAttribute($value)
    {
        if ($this->is_alias == 0) {
            return 'https://' . $value . '.' . env('APP_DOMAIN');
        } else {
            return $this->exdomain;
        }
    }

    // public function original() : Attribute{
    //     return new Attribute(get: function(){
    //             return $this->domain ;
    //     });
    // }

}
