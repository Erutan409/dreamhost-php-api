<?php

namespace Erutan409\Dreamhost\Exception;

use Erutan409\Dreamhost;

class JabberException extends Dreamhost\Exception
{
    const E_NO_USERNAME = 0x01;
    const E_NO_DOMAIN = 0x02;
    const E_NO_PASSWORD = 0x04;
    const E_INVALID_USERNAME = 0x08;
    const E_INVALID_DOMAIN = 0x10;
    const E_INVALID_PASSWORD = 0x20;
    const E_USER_EXISTS = 0x40;
    const E_USER_DOES_NOT_EXISTS = 0x80;
    const E_CHANGE_ALREADY_PENDING = 0x100;
}