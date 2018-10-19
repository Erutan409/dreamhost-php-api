<?php

namespace Dreamhost\Command;

use Dreamhost\API;

/**
 * Dreamhost Mail API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217555827-Mail-API-commands
 */
class Mail extends API
{
    /**
     * Dump a list of all email filter rules for
     * all users on all accounts you have access to.
     *
     * @return void
     */
    public function list_filters()
    {

    }

    /**
     * Adds a new mail filter to an email address
     * you have with DreamHost.
     *
     * @param string $address The full email address to which you want to add the filter
     * @param string $filter_on subject, from, to, cc, body, reply-to, headers
     * @param string $filter What to filter for (case sensitive)
     * @param string $action move, forward, delete, add_subject, forward_shell, and, or
     * @param string $action_value The parameter for the action (Note: Optional if action is delete, and, or)
     * @param string $contains yes or no (optional, default is yes)
     * @param string $stop yes or no (optional, default is yes. Note: Must be yes if action is delete)
     * @param string $rank The rank of the filter, indexes from 0. Lower means executed first (optional, default is the number of filters for the address) To create a complex multi-part filter, simply append an underscore to each of the above, followed by a number (starting at 1) for which step of the filter it is
     *
     * @return void
     */
    public function add_filter(
        $address,
        $filter_on,
        $filter,
        $action,
        $action_value,
        $contains,
        $stop,
        $rank
    ) {

    }

    /**
     * Remove a mail filter from an email address you
     * have with DreamHost.
     *
     * @param string $address The full email address from which you want to remove the filter
     * @param string $filter_on subject, from, to, cc, body, reply-to, headers
     * @param string $filter What to filter for (case sensitive)
     * @param string $action move, forward, delete, add_subject, forward_shell
     * @param string $action_value The parameter for the action (Note: Optional if action is delete)
     * @param string $contains yes or no
     * @param string $stop yes or no
     * @param string $rank The rank of the filter. Lower means executed first
     *
     * @return void
     */
    public function remove_filter(
        $address,
        $filter_on,
        $filter,
        $action,
        $action_value,
        $contains,
        $stop,
        $rank
    ) {

    }
}
