<?php

namespace Erutan409\Dreamhost\Command;

use Erutan409\Dreamhost\API;
use Erutan409\Dreamhost\Exception\AnnouncementListException;

/**
 * Dreamhost Announcement List API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217077998-Announcement-List-API-commands
 */
class AnnouncementList extends API
{
    /**
     * Dump a list of all Announcement Lists you have on
     * your account(s).
     *
     * @return void
     */
    public function list_lists()
    {}

    /**
     * Dump a list of all subscribers to an Announcement List.
     *
     * @param string $listname The name of the Announcement List, like announcements
     * @param string $domain The domain of the Announcement List, like example.com
     *
     * @return void
     */
    public function list_subscribers($listname, $domain)
    {
        throw new AnnouncementListException();
    }

    /**
     * Sends an opt-in email to an email address to ask them
     * to subscribe to an Announcement List.
     *
     * @return void
     */
    public function add_subscriber()
    {}

    /**
     * Immediately removes an email address from an
     * Announcement List.
     *
     * @return void
     */
    public function remove_subscriber()
    {}

    /**
     * Post an announcement to an Announcement List.
     *
     * @return void
     */
    public function post_announcement()
    {}
}