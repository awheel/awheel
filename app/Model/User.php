<?php

namespace App\Model;

use light\MedooModel\MedooModel;

/**
 * User Model
 *
 * @package App\Model
 */
class User extends MedooModel
{
    public $database = 'light';
    public $table = 'user';
    public $primary = 'id';
    public $timestamps = true;
}
