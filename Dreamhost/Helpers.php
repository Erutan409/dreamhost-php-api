<?php

namespace Dreamhost;

abstract class Helpers
{
    /**
     * Reindex array to start at `1`.
     *
     * @param array $array
     * @return $array
     */
    final public static function array_base_one(array $array)
    {
        $index = 1;
        $new = [];

        foreach ($array as $value) {
            $new[$index++] = $value;
        }

        return $new;
    }

    /**
     * Test that each element in the array evaluates to true.
     *
     * @param array $array
     * @param callable $callable
     * @return bool
     */
    final public static function array_every(array $array, callable $callable)
    {
        foreach ($array as $value) {
            if (!$callable($value)) {
                return false;
            }
        }

        return true;
    }
}
