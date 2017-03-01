<?php

namespace App\Controller;

use light\Routing\Controller;

/**
 * Home Controller
 *
 * @package App\Controller
 */
class IndexController extends Controller
{

    public function home()
    {
        return app('view.blade')->render('home', ['title' => time()]);
    }

}
