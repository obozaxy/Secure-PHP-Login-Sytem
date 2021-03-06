<?php
/**
 * This file is a part of secure-php-login-system.
 *
 * @author Akbar Hashmi (Owner/Developer)           <me@akbarhashmi.com>.
 * @author Nicholas English (Contributor/Developer) <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/akbarhashmi/Secure-PHP-Login-System> Github repository.
 * @license <https://github.com/akbarhashmi/Secure-PHP-Login-System/blob/master/LICENSE> MIT license.
 */

define('SYSTEM_ROOT', __DIR__);

if (!file_exists(SYSTEM_ROOT . '/vendor/autoload.php')) {
    trigger_error(
        'You need to run composer to install all the required dependencies.',
        E_USER_ERROR
    );
}

require_once SYSTEM_ROOT . '/vendor/autoload.php';


