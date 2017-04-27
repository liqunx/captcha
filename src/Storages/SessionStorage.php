<?php

namespace Mews\Captcha\Storages;

class SessionStorage implements Storage
{
    public function put($key, $value)
    {
        session()->put($key, $value);
    }

    public function get($key, $default=null)
    {
        return session($key, $default);
    }

    public function forget($key)
    {
        if(session()->has($key)){
            session()->forget($key);
        }
    }
    
    public function has($key){
        session()->has($key);
    }
    
    public function all(){
        return session()->all();
    }
}
