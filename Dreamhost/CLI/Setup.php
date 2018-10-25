<?php

namespace Erutan409\Dreamhost\CLI;

use Symfony\Component\Console\Application;
use Erutan409\Dreamhost\CLI\Command\APIKey;


abstract class Setup
{
    final public static function registerCommands(Application $instance)
    {
        $instance->add(new APIKey());
    }
}