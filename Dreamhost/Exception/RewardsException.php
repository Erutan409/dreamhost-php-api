<?php

namespace Erutan409\Dreamhost\Exception;

use Erutan409\Dreamhost;

class RewardsException extends Dreamhost\Exception
{
    const E_INVALID_CODE = 0x01;
    const E_CODE_USED = 0x02;
    const E_NO_CODE = 0x04;
    const E_NO_PERIOD = 0x08;
    const E_INVALID_PERIOD = 0x10;
}