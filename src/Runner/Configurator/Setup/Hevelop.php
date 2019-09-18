<?php

namespace HevelopHookManager\App\Runner\Configurator\Setup;

use CaptainHook\App\Config;
use CaptainHook\App\Console\IOUtil;
use CaptainHook\App\Hooks;
use CaptainHook\App\Runner\Configurator\Setup as CaptainHookSetup;
use CaptainHook\App\Runner\Configurator\Setup\Express as CaptainHookExpress;

/**
 * Class Hevelop
 * @package HevelopHookManager\App\Runner\Configurator\Setup
 */
class Hevelop extends CaptainHookExpress implements CaptainHookSetup
{
    /**
     * Setup hooks by asking some basic questions
     *
     * @param  \CaptainHook\App\Config $config
     * @throws \Exception
     */
    public function configureHooks(Config $config)
    {
        $msgHook = $config->getHookConfig(Hooks::COMMIT_MSG);
        $msgHook->setEnabled(true);

        parent::configureHooks($config);

        $this->newSetupMessageHook($msgHook);
    }

    /**
     * Setup the commit message hook
     *
     * @param  \CaptainHook\App\Config\Hook $config
     * @throws \Exception
     */
    private function newSetupMessageHook(Config\Hook $config)
    {
        $log = $this->io->write(
            '<info>Hello world!</info>'
        );
    }
}
