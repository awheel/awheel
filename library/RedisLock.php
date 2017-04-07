<?php

namespace library;

use Redis;
use awheel\CacheComponent\RedisDriver;

/**
 * Redis 锁
 *
 * @package library
 */
class RedisLock
{
    /**
     * 加锁
     *
     * @param string $key 缓存 key
     * @param int $expire 锁定时间
     *
     * @return bool
     */
    static public function lock($key, $expire = 5)
    {
        $redis = self::getInstance();
        $lock_key = $key . '_lock_key';
        $is_lock = $redis->setnx($lock_key, time() + $expire);

        if (!$is_lock) {
            $lock_time = $redis->get($lock_key);
            if (time() > $lock_time) {
                self::unlock($key);
                $is_lock = $redis->setnx($lock_key, time() + $expire);
            }
        }

        $redis->expire($lock_key, $expire);
        return (bool) $is_lock;
    }

    /**
     * 释放锁
     *
     * @param string $key 缓存 key
     *
     * @return bool
     */
    static public function unlock($key)
    {
        $lock_key = $key . '_lock_key';

        return (bool) self::getInstance()->del($lock_key);
    }

    /**
     * Redis 对象
     *
     * @return Redis
     */
    static protected function getInstance()
    {
        static $redis;
        if ($redis === null) {
            $redis = (new RedisDriver(app()->configGet('redis.user_cache')))->driver;
        }

        return $redis;
    }
}
