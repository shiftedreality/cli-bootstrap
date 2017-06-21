<?php

namespace App\Console\Command;

use Symfony\Component\Console\Command\Command;

/**
 * Class DefaultCommand
 * @package App\Console\Command
 */
class RunCommand extends Command
{
    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName('run')
            ->setDescription('Default application run command');

        parent::configure();
    }
}
