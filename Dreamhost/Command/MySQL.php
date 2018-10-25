<?php

namespace Erutan409\Dreamhost\Command;

use Erutan409\Dreamhost\API;

class MySQL extends API
{
    /**
     * Dumps a list of all active databases on all accounts
     * you have access to.
     *
     * @return void
     */
    public function list_dbs()
    {

    }

    /**
     * Dumps a list of all active database hostnames, and
     * the database servers they refer to, for all accounts
     * you have access to.
     *
     * @return void
     */
    public function list_hostnames()
    {

    }

    /**
     * Adds a database hostname.
     *
     * @param string $hostname The full hostname you want to serve as a database hostname. Unless the domain following the first is hosted with DreamHOst, you won't be able to access phpMyAdmin from this hostname.
     *
     * @return void
     */
    public function add_hostname($hostname)
    {

    }

    /**
     * Removes a database hostname.
     *
     * @param string $hostname The full hostname you want to serve as a database hostname.
     *
     * @return void
     */
    public function remove_hostname($hostname)
    {

    }

    /**
     * Dumps a list of database users and their privileges
     * for all databases on all accounts you have access to.
     *
     * @return void
     */
    public function list_users()
    {}

    /**
     * Adds a new database user to a database.
     *
     * @param string $db The database to which the user should be added
     * @param string $user The username for the new user
     * @param string $password The password for the new user
     * @param string $select Y or N (optional, default is Y)
     * @param string $insert Y or N (optional, default is Y)
     * @param string $update Y or N (optional, default is Y)
     * @param string $delete Y or N (optional, default is Y)
     * @param string $create Y or N (optional, default is Y)
     * @param string $drop Y or N (optional, default is Y)
     * @param string $index Y or N (optional, default is Y)
     * @param string $alter Y or N (optional, default is Y)
     * @param string $hostname A newline separated list of hosts in which % is a wild. From this list, the user is allowed to access the database (optional, default is %.dreamhost.com)
     *
     * @return void
     */
    public function add_user(
        $db,
        $user,
        $password,
        $select,
        $insert,
        $update,
        $delete,
        $create,
        $drop,
        $index,
        $alter,
        $hostname
    ) {}

    /**
     * Removes a database user from a database.
     *
     * @param string $db The database from which the user should be removed
     * @param string $user The username for the new user
     * @param string $select Y or N
     * @param string $insert Y or N
     * @param string $update Y or N
     * @param string $delete Y or N
     * @param string $create Y or N
     * @param string $drop Y or N
     * @param string $index Y or N
     * @param string $alter Y or N
     *
     * @return void
     */
    public function remove_user(
        $db,
        $user,
        $select,
        $insert,
        $update,
        $delete,
        $create,
        $drop,
        $index,
        $alter
    ) {}
}