<?php

namespace app\Model;

use light\MedooModel\MedooModel;

/**
 * Basic
 *
 * @package app\Model
 */
class Light extends MedooModel
{
    /**
     * BDX constructor.
     */
    public function __construct()
    {
        parent::__construct(app()->configGet('database'));
    }
}
