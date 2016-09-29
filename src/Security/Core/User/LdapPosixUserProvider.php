<?php

/*
 * This file is part of the LdapAuthentication service provider.
 *
 * (c) Martin Rademacher <mano@radebatz.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Radebatz\Silex\LdapAuth\Security\Core\User;

/**
 * Ldap user provider.
 */
class LdapPosixUserProvider extends LdapUserProvider
{
    protected function getDefaultOptions()
    {
        $options = parent::getDefaultOptions();
        $options['authName'] = 'dn';
        $options['filter'] = '(&(objectClass=posixAccount)(uid=%s))';
        return $options;
    }

    protected function initRoles($userData)
    {
        $roles = array();
        // Retrieve Roles in Posix Schema
        // TODO
        return $roles;
    }

}