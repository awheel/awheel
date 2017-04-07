<?php

namespace app\Controller;

use library\RedisLock;
use awheel\Routing\Controller;

/**
 * IndexController
 *
 * @package app\Controller
 */
class IndexController extends Controller
{
    /**
     * Index
     *
     * @return array
     */
    public function index()
    {
        return [__CLASS__, __FUNCTION__];
    }

    /**
     * cache test
     *
     * @return array
     */
    public function cache()
    {
        $key = 'cache_test';
        $get = app('cache')->get($key);
        $set = false;

        if (!$get && RedisLock::lock($key)) {
            $set = app('cache')->set($key, time(), 5);

            RedisLock::unlock($key);
        }

        return [$key, $set, $get];
    }
}
