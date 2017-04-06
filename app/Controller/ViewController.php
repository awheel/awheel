<?php

namespace app\Controller;

use awheel\Routing\Controller;

/**
 * ViewController
 *
 * @package app\Controller
 */
class ViewController extends Controller
{
    /**
     * SPA
     *
     * @return mixed
     */
    public function single()
    {
        return app('view.single')->render('share', 'index.html');
    }

    /**
     * Blade
     *
     * @return mixed
     */
    public function blade()
    {
        return app('view.blade')->render('home', ['time' => date('Y-m-d H:i:s')]);
    }
}
