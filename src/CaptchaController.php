<?php

namespace Linnenn\Captcha;

use Illuminate\Routing\Controller;

/**
 * Class CaptchaController
 * @package Linnenn\Captcha
 */
class CaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Linnenn\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        return $captcha->create($config);
    }

}
