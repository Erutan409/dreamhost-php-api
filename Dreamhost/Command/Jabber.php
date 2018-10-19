<?php

namespace Dreamhost\Command;

use Dreamhost\API;

/**
 * Dreamhost Jabber API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217078088-Jabber-API-commands
 */
class Jabber extends API
{
    /**
     * Lists all Jabber users on this account and
     * includes the user passwords and status. The
     * status is one of the following: active,
     * inactive, pending-active, pending-inactive,
     * pending-delete
     *
     * @return void
     */
    public function list_users()
    {

    }

    /**
     * Same as jabber-list_users, but leaves out the
     * passwords. Passwords display as ********.
     *
     * @return void
     */
    public function list_users_no_pw()
    {

    }

    /**
     * Alias of list_users_pw
     *
     * @return void
     */
    public function list_users_no_password()
    {

    }

    /**
     * List domains on your account that can have Jabber users.
     *
     * @return void
     */
    public function list_valid_domains()
    {

    }

    /**
     * Creates a new Jabber user. This returns a
     * service token (see Service Control Commands).
     * This may return the same service queue token
     * as previous calls to the Jabber API. If this
     * is the case, then all pending changes are
     * applied together.
     *
     * @param string $username The desired Jabber username
     * @param string $domain The domain for the new user
     * @param string $password The password for the new user
     *
     * @return void
     */
    public function add_user($username, $domain, $password)
    {

    }

    /**
     * Removes a Jabber user. This returns a service
     * token (see Service Control Commands). This may
     * return the same service queue token as previous
     * calls to the Jabber API. If this is the case,
     * then all pending changes are applied together.
     *
     * @param string $username
     * @param string $domain
     *
     * @return void
     */
    public function remove_user($username, $domain)
    {

    }

    /**
     * Reactivates a Jabber user that had been disabled.
     * This returns a service token (see Service Control
     * Commands). This may return the same service queue
     * token as previous calls to the Jabber API. If this
     * is the case, then all pending changes are
     * applied together.
     *
     * @param string $username
     * @param string $domain
     *
     * @return void
     */
    public function reactivate_user($username, $domain)
    {

    }

    /**
     * Deactivates a Jabber user. This returns a service
     * token (see Service Control Commands). This may
     * return the same service queue token as previous
     * calls to the Jabber API. If this is the case,
     * then all pending changes are applied together.
     *
     * @param string $username
     * @param string $domain
     *
     * @return void
     */
    public function deactivate_user($username, $domain)
    {

    }
}
