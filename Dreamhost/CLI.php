<?php

namespace Dreamhost;

use HaydenPierce\ClassFinder\ClassFinder;
use League\CLImate\CLImate;

abstract class CLI
{
    private static $cli = null;

    /**
     * Undocumented function
     *
     * @return CLImate
     */
    public function getInstance() {
        if (is_null(self::$cli)) {
            self::$cli = new CLImate();
        }

        return self::$cli;
    }

    public static function getCommands()
    {
        $commands = ClassFinder::getClassesInNamespace(__NAMESPACE__ . '\\Command');

        array_walk($commands, function (&$command) {
            $command = pathinfo($command, PATHINFO_BASENAME);
        });

        return Helpers::array_base_one($commands);
    }

    public static function outputOrderedList(array $list, CLImate $climate)
    {
        foreach ($list as $number => $value) {
            $climate->out($number . '. ' . $value);
        }
    }
}
