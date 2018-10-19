<?php

namespace Dreamhost\Exception;

use Dreamhost;

class DomainException extends Dreamhost\Exception
{
    const E_INVALID_DOMAIN = 0x01; // The domain is not valid or it is a subdomain
    const E_INVALID_TLD = 0x02; // The top level domain is not .com, .net, .org, or .info
}
