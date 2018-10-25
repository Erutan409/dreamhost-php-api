<?php

namespace Erutan409\Dreamhost\Command;

use Erutan409\Dreamhost\API;

/**
 * Dreamhost Account API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217077988-Account-API-commands
 */
abstract class Account extends API
{
    /**
     * Lists bandwidth usage for all visible domain services.
     * Bandwidth usage is in bytes from the beginning of the
     * current billing cycle (which can be determined using
     * account-status).
     *
     * @return void
     */
    public static function domain_usage()
    {

    }

    /**
     * Lists all SSH public keys on this account. SSH keys may
     * be used to provide root access to any of your VPS or
     * Dedicated Servers.
     *
     * @return void
     */
    public static function list_keys()
    {}

    /**
     * Returns the status of the current account. All results
     * of this function should be treated as advisory only.
     *
     * @return void
     */
    public static function status()
    {}

    /**
     * Lists disk and bandwidth usage for all visible users.
     * Disk usage is in kilobytes; bandwidth usage is in bytes
     * since the start of the billing cycle (see account-status
     * to determine when that is). In most cases, bandwidth
     * usage appears as zero here. See account-domain_usage for
     * domain bandwidth.
     *
     * @return void
     */
    public static function user_usage()
    {}
}