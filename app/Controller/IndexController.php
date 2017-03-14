<?php

namespace app\Controller;

use light\Routing\Controller;

/**
 * Home Controller
 *
 * @package app\Controller
 */
class IndexController extends Controller
{

    public function home()
    {
        return app('view.blade')->render('home', ['title' => time()]);
    }

}
