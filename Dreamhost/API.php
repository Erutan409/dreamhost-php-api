<?php

namespace Erutan409\Dreamhost;

abstract class API
{
    const API_ENDPOINT = 'https://api.dreamhost.com/';

    public static function test()
    {
        echo ('Works');
    }
}
