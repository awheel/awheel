<?php

namespace app\Model;

use light\MedooModel\MedooModel;

/**
 * User model
 *
 * @package app\Model
 */
class User extends MedooModel
{
    public $database = 'light';
    public $table = 'user';
    public $primary = 'id';
    public $timestamps = true;

    /**
     * constructor.
     */
    public function __construct()
    {
        parent::__construct(app()->configGet('database'));
    }

    /**
     * get user info
     *
     * @param $user_id
     *
     * @return mixed|array
     */
    public function info($user_id)
    {
        return $this->get('*', ['id' => $user_id]);
    }
}
