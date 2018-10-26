<?php

namespace Erutan409\Dreamhost;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class Rest
{
    const API_ENDPOINT = 'https://api.dreamhost.com/?cmd=%s&key=%s&format=json';

    /**
     * Do REST call.
     *
     * @param array $options
     * @return object|false
     */
    final protected static function request(array $options = [])
    {
        $uri = sprintf(
            self::API_ENDPOINT,
            strtolower(current(array_reverse(explode('\\', static::class))))
            . '-' . debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)[1]['function'],
            'somekey'
        );

        return $uri;

        try {
            return json_decode((new Client())->request('GET', $uri, $options)->getBody());
        } catch (GuzzleException $e) {
            return false;
        }
    }
}