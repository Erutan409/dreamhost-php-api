<?php

namespace Erutan409\Dreamhost;

use Erutan409\Dreamhost\API\Account;
use Erutan409\Dreamhost\API\AnnouncementList;

abstract class API
{
    /**
     * Get Account API
     *
     * @return Account
     */
    public static function Account() {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new Account();
        }

        return $instance;
    }

    /**
     * Get Announcement List API
     *
     * @return AnnouncementList
     */
    public static function AnnouncementList() {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new AnnouncementList();
        }

        return $instance;
    }

}
