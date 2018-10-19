<?php

namespace Erutan409\Dreamhost\Exception;

use Erutan409\Dreamhost;

class ServiceControlException extends Dreamhost\Exception
{
    const E_INVALID_TOKEN = 0x01;
    const E_TOO_OLD = 0x02;
}