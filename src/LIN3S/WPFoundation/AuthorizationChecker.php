<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace LIN3S\WPFoundation;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class AuthorizationChecker
{
    private const ROLE_ADMIN = 'administrator';
    private const ROLE_AUTHOR = 'author';
    private const ROLE_EDITOR = 'editor';

    private $user;

    public function __construct()
    {
        $this->user = wp_get_current_user();

        if ($this->isNotAdmin()) {
            add_filter('admin_menu', function () {
                remove_menu_page('profile.php');
                remove_menu_page('tools.php');
                remove_menu_page('options-general.php');
                remove_menu_page('edit.php');
                remove_menu_page('admin.php');
                remove_submenu_page('users.php', 'profile.php');
            });
        }
    }

    private function isNotAdmin() : bool
    {
        return !in_array(self::ROLE_ADMIN, $this->user->roles, true);
    }
}
