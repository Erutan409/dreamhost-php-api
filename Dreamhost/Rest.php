<?php

namespace Dreamhost;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\GuzzleException;

abstract class Rest
{
    final protected function request($method, $uri, $options)
    {
        $request = (new Client())->request();
    }
}
