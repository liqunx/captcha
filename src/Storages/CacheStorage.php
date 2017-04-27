<?php

namespace Mews\Captcha\Storages;

use Cache;

use Illuminate\Support\Arr;

class CacheStorage implements Storage
{
    protected static $lifetime = 120;

    public static function setMinutesOfLifeTime($time)
    {
        if (is_int($time) && $time > 0) {
            self::$lifetime = $time;
        }
    }

    public function put($key, $value)
    {
        Cache::put($key, $value, self::$lifetime);
    }

    public function get($key, $default=null)
    {
        $arr = Cache::get(explode('.', $key)[0]);
        return Cache::get($key, $default);
    }

    public function forget($key)
    {
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
    
    public function has($key){
        return Cache::has($key);
    }

}
