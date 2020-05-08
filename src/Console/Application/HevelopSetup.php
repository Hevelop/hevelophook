<?php

namespace HevelopHookManager\App\Console\Application;

use \CaptainHook\App\Console\Application;
use \HevelopHookManager\App\Console\Command as Cmd;
use \CaptainHook\App\Console\Application\Setup as CaptainHookSetup;

/**
 * Class HevelopSetup
 * @package HevelopHookManager\App\Console\Application
 */
class HevelopSetup extends CaptainHookSetup
{
    /**
     * Initializes all the CaptainHook commands.
     *
     * @return \Symfony\Component\Console\Command\Command[]
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        array_push(
            $commands,
            new Cmd\HevelopConfiguration()
        );
        return $commands;
    }
}
