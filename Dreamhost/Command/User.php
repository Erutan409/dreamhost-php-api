<?php

namespace Dreamhost\Command;

use Dreamhost\API;

/**
 * Dreamhost User API
 *
 * @see https://help.dreamhost.com/hc/en-us/articles/217078398-User-API-commands
 */
class User extends API
{
    /**
     * Adds a user (of type ftp, sftp, or shell). If you
     * do not specify a password, a password is randomly
     * generated and displayed in the result. Otherwise
     * the result displays ******** for the password. A
     * Service token is also returned (see Service
     * Control Commands).
     *
     * @param string $type The type of user; can be ftp, sftp, or shell
     * @param string $username The desired username for the new user
     * @param string $gecos The Full Name for this user, like John Smith (this field cannot be blank)
     * @param string $server The home for the user (the shared serber or VPS). This is required
     * @param string $shell_type The type of shell for the user (bash, tcsh, ksh, or zsh). Only required if the type is shell
     * @param string $password (optional) The password for the new user. Randomly generated if not specified
     * @param string $enhanced_security (optional) Set to 1 to enable Enhanced User Security (set to 0 or leave blank to disable)
     *
     * @return void
     */
    public function add_user(
        $type,
        $username,
        $gecos,
        $server,
        $shell_type,
        $password,
        $enhanced_security
    ) {}

    /**
     * Dump a list of all users (including ftp, shell,
     * anonymous ftp, backup, and mailboxes) on all accounts
     * you have access to. Passwords are no longer available
     * via this API command.
     *
     * @return void
     */
    public function list_users()
    {}

    /**
     * Removes a user specified by the username. Optionally the
     * type of user or home can be specified to distinguish the
     * user to delete (if the user exists on multiple homes/types).
     * To specify the home, set the username to **username@home.**
     * If the username has more than one type/home, you can set
     * remove_all to remove all instances of the user (note: if
     * remove_all is set and the type or home is specified, it
     * removes all instances of username with that type or on
     * that home).
     *
     * @param string $username The user to remove, like testuser42. Optionally use username@home to specify a home, like testuser42@riga
     * @param string $type (Optional) the type of user, like ftp, shell, etc
     * @param string $remove_all (Optional) set to 1 to remove all instances of this user (if user has multiple types or is on multiple homes)
     *
     * @return void
     */
    public function remove_user(
        $username,
        $type,
        $remove_all
    ) {

    }
}
