<?php

namespace Dreamhost;

abstract class Helpers
{
    final public static function array_base_one(array $array)
    {
        $index = 1;
        $new = [];

        foreach ($array as $value) {
            $new[$index++] = $value;
        }

        return $new;
    }
}
