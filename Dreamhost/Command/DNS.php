<?php

namespace Dreamhost\Command;

use Dreamhost\API;

/**
 * Dreamhost DNS API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217555707-DNS-API-commands
 */
class DNS extends API
{
    /**
     * Dump a list of all DNS records for all domains
     * (not including registrations) on all accounts
     * you have access to. Please note that this skips
     * the dreamhosters.com, dreamhost.com, dreamhostps.com,
     * and newdream.net zones.
     *
     * @return void
     */
    public function list_records()
    {

    }

    /**
     * Adds a new DNS record to a domain you already
     * have hosted with DreamHost. However, you cannot
     * add dreamhosters.com records. Keep in mind DNS
     * changes may take a while to propagate.
     *
     * @param string $record The full name of the record you'd like to add, e.g., testing.groo.com
     * @param string $type A, CNAME, PTR, NAPTR, SRV, TXT, SPF, or AAAA
     * @param string $value The DNS record's value
     * @param string $comment Optional comment for this record
     *
     * @return void
     */
    public function add_record($record, $type, $value, $comment = '')
    {

    }

    /**
     * Removes an existing editable DNS record you have
     * with DreamHost. However, you cannot remove
     * dreamhosters.com records. Keep in mind DNS changes
     * may take a while to propagate.
     *
     * @param string $record The full name of the record you'd like to remove e.g., testing.groo.com
     * @param string $type The type (see add_record) of the record you'd like to remove
     * @param string $value The value (see add_record) or the record you'd like to remove
     *
     * @return void
     */
    public function remove_record($record, $type, $value)
    {

    }
}
