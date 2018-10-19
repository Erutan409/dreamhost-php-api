<?php

namespace Dreamhost;

abstract class API
{
    const API_ENDPOINT = 'https://api.dreamhost.com/';

    public static function test()
    {
        echo ('Works');
    }
}
