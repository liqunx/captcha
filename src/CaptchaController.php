<?php

namespace Mews\Captcha;

use Illuminate\Routing\Controller;

/**
 * Class CaptchaController
 * @package Mews\Captcha
 */
class CaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Mews\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        return $captcha->create($config);
    }
    
    /**
     * captcha status console
     */
    public function info(Captcha $captcha){
        $html = '<meta charset="UTF-8"/><h2 align="center" style="margin-top: 30px;margin-bottom: 0;">Captcha</h2>';
        $html .= '<p style="margin-bottom: 30px;font-size: 13px;color: #888;" align="center"> version:1.0 </p>';
        $html .= '<hr>';
        $html .= '<p>你可以在调试模式(设置config/app.php中的debug为true)下查看到存储在存储器中的验证码相关数据:</p>';
        echo $html;
        if (config('app.debug')) {
            dump('coming soon');
        } else {
            echo '<p align="center" style="color: red;">现在是非调试模式，无法查看调试数据</p>';
        }
    }
}
