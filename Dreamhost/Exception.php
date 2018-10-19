<?php

namespace Erutan409\Dreamhost;

class Exception extends \Exception
{
    protected function errorCodes($huamn_readable = false) {
        $constants = array_filter((new ReflectionClass($this))->getConstants(), function($val, $const) {
            return stripos($const, 'E_') === 0;
        });

        $keys = array_map(function($key) {
            return ucwords(str_replace('_', ' ', strtolower(substr($key, 2))));
        }, array_keys($constants));

        return array_combine($keys, array_values($constants));
    }
}
