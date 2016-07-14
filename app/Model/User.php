<?php

namespace App\Model;

use light\Model;

/**
 * User Model
 *
 * @package App\Model
 */
class User extends Model
{
    public $database = 'light';
    public $table = 'user';
    public $primary = 'id';
    public $timestamps = true;
}
