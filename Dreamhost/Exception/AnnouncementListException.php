<?php

namespace Erutan409\Dreamhost\Exception;

use Erutan409\Dreamhost;

class AnnouncementListException extends Dreamhost\Exception
{
    const E_NO_LISTNAME = 0x01;
    const E_NO_DOMAIN = 0x02;
    const E_NO_SUCH_LISTNAME = 0x04;
    const E_NO_SUCH_DOMAIN = 0x08;
    const E_NO_EMAIL = 0x10;
    const E_INVALID_EMAIL = 0x20;
    const E_ALREADY_SUBSCRIBED = 0x40;
    const E_EMAIL_MAY_NOT_BE_ADDED_TO_ANY_DREAMHOST_LIST_EVER = 0x80;
    const E_EMAIL_REQUEST_TO_BE_ADDED_IN_LAST_TWO_DAYS_ALREADY = 0x100;
    const E_INTERNAL_ERROR_OPTING_IN = 0x200;
    const E_NOT_SUBSCRIBED = 0x400;
    const E_INTERNAL_ERROR_UNSUBSCRIBING = 0x800;
    const E_MESSAGE_REQUIRED = 0x1000;
    const E_INVALID_STAMP = 0x2000;
    const E_INVALID_NAME = 0x4000;
    const E_DUPLICATE_MESSAGE = 0x8000;
    const E_INTERNAL_ERROR_UPDATING_LIST = 0x10000;
    const E_INTERNAL_ERROR_SENDING_MAIL = 0x20000;
}