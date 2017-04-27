<?php

namespace Mews\Captcha\Storages;

interface Storage
{
    public function put($key, $value);

    public function get($key, $default);

    public function forget($key);
    
    public function has($key);
}
