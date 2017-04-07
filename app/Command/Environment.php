<?php

namespace app\Command;

use awheel\App;
use awheel\Console\Command;

/**
 * 获取当前运行环境
 *
 * @package app\Command
 */
class Environment extends Command
{
    protected $name = 'env';
    protected $description = 'Show runtime environment';

    public function handle()
    {
        $this->info(App::getInstance()->environment());
    }
}
