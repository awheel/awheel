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
}
