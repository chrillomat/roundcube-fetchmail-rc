<?php

/**
 * fetchmail_rc config file
 */

// Root target of your roundcube installation
$rcmail_config['fetchmail_rc_roundcube_install_path'] = "/var/lib/roundcube/";
//$rcmail_config['fetchmail_rc_roundcube_install_path'] = "/usr/share/roundcube/";
// Error count before to warn the user by mail that his mailbox is not working anymore
$rcmail_config['fetchmail_rc_errors_before_warning'] = 5;

define("CONSOLE_DEBUG_MODE", true);
