<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 17:09
 */
namespace app\api\controller\index;
use mikkle\tp_wechat\WechatApi;
class Index extends WechatApi
{
    protected $options = [
          'token'=>'',
          'appid'=>'',
          'appsecret'=>'',
        'encodingaeskey'=>'',
        ];
    protected $valid = false;  //网站第一次匹配 true 1为匹配
    protected $isHook = false; //是否开启钩子

}