<?php

namespace Dreamhost;

use HaydenPierce\ClassFinder\ClassFinder;
use League\CLImate\CLImate;

abstract class CLI
{
    private static $cli = null;

    /**
     * Get CLImate instance.
     *
     * @param boolean $something
     * @return CLImate
     */
    final public static function getInstance($something = true)
    {
        if (is_null(self::$cli)) {
            self::$cli = new CLImate();
            self::$cli->addArt(__DIR__ . '/CLI/art/');
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
        $climate = self::getInstance();
        $climate->clear();

        $climate->animation('dreamhost')->enterFrom('bottom');

        sleep(2);

        $climate->clear();

        $climate->animation('dreamhost')->exitTo('top');

        $climate->clear();

        while (true) {
            self::outputOrderedList(self::getCommands());

            while (intval($response = $climate->input('Select command:')->prompt()) === 0) {
                $climate->input('Please select a number from the list given.')->prompt();
            }

            sleep(2);
        }
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
