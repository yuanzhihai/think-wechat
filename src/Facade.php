<?php
/**
 * @author yzh52521<396751927@qq.com>
 * @copyright yzh52521
 */

namespace yzh52521\ThinkWechat;

use think\Facade as ThinkFacade;

/**
 * Class Facade.
 *
 * @author overtrue <i@overtrue.me>
 */
class Facade extends ThinkFacade
{
    /**
     * 默认为 Server.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'wechat.official_account';
    }

    /**
     * @return \EasyWeChat\OfficialAccount\Application|object|\think\App
     */
    public static function officialAccount($name = '',$config = [])
    {
        $app = $name ? app('wechat.official_account.' . $name, ["config"=>$config]) : app('wechat.official_account',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

    /**
     * @return \EasyWeChat\Work\Application|object|\think\App
     */
    public static function work($name = '',$config = [])
    {
        $app = $name ? app('wechat.work.' . $name,  ["config"=>$config]) : app('wechat.work',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

    /**
     * @return \EasyWeChat\Payment\Application|object|\think\App
     */
    public static function payment($name = '',$config = [])
    {
        $app = $name ? app('wechat.payment.' . $name,  ["config"=>$config]) : app('wechat.payment',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

    /**
     * @return \EasyWeChat\MiniProgram\Application|object|\think\App
     */
    public static function miniProgram($name = '',$config = [])
    {
        $app = $name ? app('wechat.mini_program.' . $name,  ["config"=>$config]) : app('wechat.mini_program',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

    /**
     * @return \EasyWeChat\OpenPlatform\Application|object|\think\App
     */
    public static function openPlatform($name = '',$config = [])
    {
        $app = $name ? app('wechat.open_platform.' . $name,  ["config"=>$config]) : app('wechat.open_platform',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }


    /**
     * @return \EasyWeChat\OpenWork\Application|object|\think\App
     */
    public static function openWork($name = '',$config = [])
    {
        $app = $name ? app('wechat.open_work.' . $name,  ["config"=>$config]) : app('wechat.open_work',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

    /**
     * @return \EasyWeChat\MicroMerchant\Application|object|\think\App
     */
    public static function microMerchant($name = '',$config = [])
    {
        $app = $name ? app('wechat.micro_merchant.' . $name,  ["config"=>$config]) : app('wechat.micro_merchant',  ["config"=>$config]);
        injectThinkLoggerToWechatApp($app);
        return $app;
    }

}
