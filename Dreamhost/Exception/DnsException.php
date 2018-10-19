<?php

namespace Dreamhost\Exception;

use Dreamhost;

class DnsException extends Dreamhost\Exception
{
    const E_NO_RECORD = 0x01;
    const E_NO_TYPE = 0x02;
    const E_NO_VALUE = 0x04;
    const E_INVALID_RECORD = 0x08;
    const E_INVALID_VALUE = 0x10;
    const E_NO_SUCH_ZONE = 0x20;
    const E_CNAME_MUST_BE_ONLY_RECORD = 0x40;
    const E_CNAME_ALREADY_EXISTS_REMOVE_FIRST = 0x80;
    const E_RECORD_ALREADY_EXISTS_NOT_EDITABLE = 0x100;
    const E_RECORD_ALREADY_EXISTS_REMOVE_FIRST = 0x200;
    const E_INTERNAL_ERROR_UPDATING_ZONE = 0x400;
    const E_INTERNAL_ERROR_COULD_NOT_ADD_RECORD = 0x800;
    const E_INTERNAL_ERROR_COULD_NOT_DESTROY_RECORD = 0x1000;
    const E_INTERNAL_ERROR_COULD_NOT_UPDATE_ZONE = 0x2000;
    const E_NO_SUCH_RECORD = 0x4000;
    const E_NO_SUCH_TYPE = 0x8000;
    const E_NO_SUCH_VALUE = 0x10000;
    const E_NOT_EDITABLE = 0x20000;
}
