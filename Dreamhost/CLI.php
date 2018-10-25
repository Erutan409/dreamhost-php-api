<?php

namespace Erutan409\Dreamhost;

use HaydenPierce\ClassFinder\ClassFinder;
use League\CLImate\CLImate;
use Symfony\Component\Console\Application;
use Erutan409\Dreamhost\CLI\Setup;

abstract class CLI
{
    private static $cli = null;

    private static function bootstrap()
    {
        Setup::registerCommands(self::getInstance());
    }

    private static function flashLogo()
    {
        $climate = new CLImate();

        $climate->addArt(__DIR__.'/CLI/art');
        $climate->clear();
        $climate->animation('dreamhost')->enterFrom('bottom');

        sleep(2);

        $climate->clear();
        $climate->animation('dreamhost')->exitTo('top');
        $climate->clear();

        unset($climate);
    }

    /**
     * Get Application instance.
     *
     * @param boolean $something
     * @return Application
     */
    final public static function getInstance($something = true)
    {
        if (is_null(self::$cli)) {
            self::$cli = new Application('Dreamhost API');
        }

        return self::$cli;
    }

    /**
     * Bootstrap CLI.
     *
     * @return void
     */
    final public static function run()
    {
        self::flashLogo();
        self::bootstrap();

        self::getInstance()->run();
    }

    /**
     * Get available commands.
     *
     * @return string[]
     */
    public static function getCommands()
    {
        $commands = ClassFinder::getClassesInNamespace(__NAMESPACE__ . '\\Command');

        array_walk($commands, function (&$command) {
            $command = pathinfo($command, PATHINFO_BASENAME);
        });

        return Helpers::array_base_one($commands);
    }

    public static function outputOrderedList(array $list)
    {
        foreach ($list as $number => $value) {
            self::getInstance()->out($number . '. ' . $value);
        }
    }
}
