<?php

namespace App\Model;

use light\MedooModel\MedooModel;

/**
 * Basic
 *
 * @package App\Model
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
