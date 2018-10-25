<?php

namespace Erutan409\Dreamhost\Exception;

use Dreamhost;

class MySQLException extends Dreamhost\Exception
{
    const E_NO_HOSTNAME = 0x01;
    const E_INVALID_DOMAIN = 0x02;
    const E_TAKEN_SUBDOMAIN = 0x04;
    const E_INTERNAL_ERROR_ADDING_HOSTNAME = 0x08;
    const E_INTERNAL_ERROR_COULD_NOT_LOAD_DOMAIN = 0x10;
    const E_INTERNAL_ERROR_REMOVING_HOSTNAME = 0x20;
    const E_NO_DB = 0x40;
    const E_NO_SUCH_DB = 0x80;
    const E_NO_USER = 0x100;
    const E_INVALID_USER = 0x200; // reason
    const E_USER_EXISTS = 0x400;
    const E_USER_NOT_LOWERCASE = 0x800;
    const E_USER_ALREADY_ON_DB = 0x1000;
    const E_NO_PASSWORD = 0x2000;
    const E_INVALID_PASSWORD = 0x4000; // reason
    const E_INVALID_SELECT = 0x8000;
    const E_INVALID_INSERT = 0x10000;
    const E_INVALID_UPDATE = 0x20000;
    const E_INVALID_DELETE = 0x40000;
    const E_INVALID_CREATE = 0x80000;
    const E_INVALID_DROP = 0x100000;
    const E_INVALID_INDEX = 0x200000;
    const E_INVALID_AFTER = 0x400000;
    const E_INTERNAL_ERROR_COULD_NOT_LOAD_DB = 0x800000;
    const E_INTERNAL_ERROR_ADDING_USER = 0x1000000;
    const E_NO_SUCH_USER = 0x2000000;
    const E_NO_SELECT = 0x4000000;
    const E_NO_INSERT = 0x8000000;
    const E_NO_UPDATE = 0x10000000;
    const E_NO_DELETE = 0x20000000;
    const E_NO_CREATE = 0x40000000;
    const E_NO_DROP = 0x80000000;
    const E_NO_INDEX = 0x100000000;
    const E_NO_AFTER = 0x200000000;
    const E_INTERNAL_ERROR_REMOVING_USER = 0x400000000;
}
