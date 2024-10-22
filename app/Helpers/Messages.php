<?php

/**
 * Created by PhpStorm.
 * User: momensisalem
 * Date: 2019-03-20
 * Time: 20:48
 */

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class Messages
{
    public static function getMessage($code)
    {
        if(request()->expectsJson()){
            $lang = request()->header('lang') ?? config('app.locale'); // get code lang ar,en,fr...
        }else {
            $lang = App::getLocale();
        }
        return trans($code,[],$lang);
    }
    
}
