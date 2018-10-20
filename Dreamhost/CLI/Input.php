<?php

namespace Dreamhost\CLI;

use Dreamhost\CLI;

abstract class Input
{
    const STR = 1;
    const INT = 2;
    const FLO = 3;
    const BOO = 4;

    public static function get($message, callable $validate, $tries = 1)
    {
        $response = false;

        do {
            if ($validate($response = CLI::getInstance()->input($message)->prompt())) {
                return $response;
            }

            $tries--;
        } while ($tries !== 0);

        throw new UserException('User could not specify needed input.');
    }
}
