<?php
/**
 * ThinkPHP微信缓存类
 *
 * @author yzh52521<396751927@qq.com>
 * @copyright yzh52521
 */

namespace yzh52521\ThinkWechat;

use Psr\SimpleCache\CacheInterface;
use think\Cache;
class CacheBridge implements CacheInterface
{
    protected $cache = null;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function get($key, $default = null)
    {
        return $this->cache->get($key, $default);
    }

    public function set($key, $value, $ttl = null)
    {
        return $this->cache->set($key, $value, $ttl);
    }

    public function delete($key)
    {
        return $this->cache->rm($key);
    }

    public function clear()
    {
        return $this->cache->clear();
    }

    public function getMultiple($keys, $default = null)
    {
    }

    public function setMultiple($values, $ttl = null)
    {
    }

    public function deleteMultiple($keys)
    {
    }

    public function has($key)
    {
        return !is_null($this->cache->get($key));
    }

}
