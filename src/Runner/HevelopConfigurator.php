<?php

namespace HevelopHookManager\App\Runner;

use CaptainHook\App\Config;
use CaptainHook\App\Console\IOUtil;
use CaptainHook\App\Hook\Util;
use CaptainHook\App\Runner;
use CaptainHook\App\Storage\File\Json;
use CaptainHook\App\Runner\Configurator as CaptainHookConfigurator;

/**
 * Class HevelopConfigurator
 * @package HevelopHookManager\App\Runner
 */
class HevelopConfigurator extends CaptainHookConfigurator
{

    /**
     * Use express setup mode
     *
     * @var bool
     */
    private $advanced;

    /**
     * Execute the configurator
     */
    public function run()
    {
        $config = $this->getConfigToManipulate();
        $setup  = $this->getHookSetup();

        $setup->configureHooks($config);
        $this->writeConfig($config);

        $this->io->write(
            [
                '<info>Configuration created successfully</info>',
                'Run <comment>\'vendor/bin/captainhook install\'</comment> to activate your hook configuration',
            ]
        );
    }

    /**
     * Return config to handle
     *
     * @return \CaptainHook\App\Config
     */
    public function getConfigToManipulate() : Config
    {
        return new Config($this->config->getPath());
    }

    /**
     * Return the setup handler to ask the user questions
     *
     * @return \CaptainHook\App\Runner\Configurator\Setup
     */
    private function getHookSetup()
    {
        return new Configurator\Setup\Hevelop($this->io);
    }
}
