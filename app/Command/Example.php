<?php

namespace app\Command;

use light\Console\Command;

/**
 * Example Command
 *
 * @package app\Command
 */
class Example extends Command
{
    protected $name = 'example';
    protected $description = 'Example command';

    public function handle()
    {
        $this->normal('Normal');
        $this->info('Hi');
        $this->error('Error');
        $this->comment('Comment');
        $this->question('Question');
        $confirm = $this->confirm('Confirm', true);
        $confirm ? $this->info('Yes') : $this->comment('No');
    }
}
