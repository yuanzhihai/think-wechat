<?php
/**
 * @author yzh52521<396751927@qq.com>
 * @copyright yzh52521
 */

namespace yzh52521\ThinkWechat;

use Monolog\Handler\AbstractProcessingHandler;
use think\facade\Log;

/**
 * 注入自定义日志
 *
 * @param mixed $app
 * @return null
 */
function injectThinkLoggerToWechatApp($app)
{
    if (!config('wechat.inject_think_logger')) {
        return;
    }
    // 注册自定义日志驱动
    new class($app)
    {
        public function __construct($app)
        {
            $app->logger->extend('thinkphp', function ($app, $config) {
                return new \Monolog\Logger($this->parseChannel($config), [
                    $this->prepareHandler(new class($this->level($config)) extends AbstractProcessingHandler
                    {
                        protected function write(array $record)
                        {
                            Log::record(rtrim($record['formatted'], "\n"), strtolower($record['level_name'] ?? 'info'));
                        }
                    }),
                ]);
            });
        }
    };
}
