<?php

namespace app\Controller;

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
        $set = app('cache')->set($key, time(), 10);
        $get = app('cache')->get($key);

        return [$key, $set, $get];
    }
}
