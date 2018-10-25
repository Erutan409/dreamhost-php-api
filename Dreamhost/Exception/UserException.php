<?php

namespace Erutan409\Dreamhost\Exception;

use Erutan409\Dreamhost;

class UserException extends Dreamhost\Exception
{
    const E_NO_TPYE = 1;
    const E_NO_USERNAME = 2;
    const E_NO_GECOS = 3;
    const E_NO_SERVER = 4;
    const E_NO_NO_SHELL_TYPE = 5;
    const E_INVALID_TYPE = 6;
    const E_INVALID_SHELL_TPYE = 7;
    const E_INVALID_SERVER = 8;
    const E_INVALID_USERNAME = 9;
    const E_USER_EXISTS = 10;
    const E_INVALID_GECOS = 11;
    const E_INVALID_PASSWORD = 12;
    const E_INVALID_USER = 13;
    const E_MULTIPLE_USER_SERVICES = 14;
    const E_TYPE_HOME_AND_REMOVE_ALL = 15; // documented as type/home and remove_all
    const E_CANNOT_REMOVE_USER = 16;
}