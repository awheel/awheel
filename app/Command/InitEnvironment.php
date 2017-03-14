<?php

namespace app\Command;

use light\Console\Command;

/**
 * 初始化程序运行环境
 *
 * @package app\Command
 */
class InitEnvironment extends Command
{
    protected $name = 'init:env';
    protected $description = 'Init environment';

    public function handle()
    {
        $view = app()->configGet('view');

        foreach ($view as $component => $config) {
            !file_exists($config['path']) && mkdir($config['path'], 0777, true);
            !file_exists($config['cache']) && mkdir($config['cache'], 0777, true);
        }

        $this->info('Done');
    }

    public function testCache()
    {
        //
    }

    public function testDb()
    {
        //
    }
}
