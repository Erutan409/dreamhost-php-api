<?php

namespace Dreamhost\Exception;

use Dreamhost;

class MailException extends Dreamhost\Exception
{
    const E_NO_ADDRESS = 0x01;
    const E_INVALID_ADDRESS = 0x02;
    const E_NO_FILTER_ON = 0x04;
    const E_INVALID_FILTER_ON = 0x08;
    const E_NO_FILTER = 0x10;
    const E_INVALID_FILTER = 0x20;
    const E_NO_ACTION = 0x40;
    const E_INVALID_ACTION = 0x80;
    const E_INCONSISTENT_BOOLEAN = 0x100;
    const E_NO_ACTION_VALUE = 0x200;
    const E_INVALID_STOP = 0x400;
    const E_INCONSISTENT_STOP = 0x800;
    const E_INVALID_CONTAINS = 0x1000;
    const E_NEGATIVE_RANK = 0x2000;
    const E_RANK_TOO_HIGH = 0x4000;
    const E_INCONSISTENT_RANK = 0x8000;
    const E_CANNOT_CREATE_SIMPLE_AND_COMPLEX_FILTER = 0x10000;
    const E_INCOMPLETE_FILTER = 0x20000;
    const E_INVALID_FOLDER = 0x40000;
    const E_INVALID_FORWARD_ADDRESS = 0x80000;
    const E_INVALID_SHELL_ACCOUNT = 0x100000;
    const E_NO_STOP = 0x200000;
    const E_NO_CONTAINS = 0x400000;
    const E_NO_RANK = 0x800000;
    const E_RANK_TOO_LOW = 0x1000000;
    const E_CANNOT_REMOVE_SUBFILTER = 0x2000000;
    const E_NO_SUCH_FILTER = 0x4000000;
}
