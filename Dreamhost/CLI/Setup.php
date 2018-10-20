<?php

namespace Dreamhost\CLI;

use Symfony\Component\Console\Application;
use Dreamhost\CLI\Command\APIKey;


abstract class Setup
{
    final public static function registerCommands(Application $instance)
    {
        $instance->add(new APIKey());
    }
}
