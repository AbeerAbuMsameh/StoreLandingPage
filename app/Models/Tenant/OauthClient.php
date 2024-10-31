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

class OauthClient extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $connection = 'tenant';

    protected $table = 'oauth_clients';
}
