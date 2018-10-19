<?php

namespace Dreamhost\Command;

use Dreamhost\API;

/**
 * Dreamhost Domain API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217555767-Domain-API-commands
 */
class Domain extends API
{
    /**
     * Dump a list of all hosted domains (not including
     * registrations) on all accounts you have access to.
     *
     * @return void
     */
    public function list_domains()
    {

    }

    /**
     * Dump a list of all domain registrations you have
     * registered with DreamHost, including ones that
     * have expired recently enough that you can still
     * renew them from the panel.
     *
     * @return void
     */
    public function list_registrations()
    {

    }
}
