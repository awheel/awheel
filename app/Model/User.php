<?php

namespace app\Model;

/**
 * User
 *
 * @package app\Model
 */
class User extends Light
{
    public $database = 'light';
    public $table = 'user';
    public $primary = 'id';
    public $timestamps = true;

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
