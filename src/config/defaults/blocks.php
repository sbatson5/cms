<?php

/**
 * DO NOT EDIT THIS FILE.
 *
 * This file is subject to be overwritten by a @@@productDisplay@@@ update at any time.
 *
 * If you want to change any of these settings, copy it into
 * blocks/config/config.php, and make your change there.
 */

/**
 * Determines whether the system is in dev mode or not.
 */
$blocksConfig['devMode'] = false;

/**
 *
 */
$blocksConfig['resourceTriggerWord'] = 'resource';

/**
 *
 */
$blocksConfig['actionTriggerWord'] = 'action';

/**
 *
 */
$blocksConfig['logoutTriggerWord'] = 'logout';

/**
 * If you're running with devMode = false, this cache time will be used instead of devCacheTimeSeconds.
 */
$blocksConfig['cacheTimeSeconds'] = 86400;

/**
 * If you're running with devMode = true, this cache time will be used instead of cacheTimeSeconds.
 */
$blocksConfig['devCacheTimeSeconds'] = 5;

/**
 * How to format the URLs
 *
 * Possible values:
 *  - 'pathinfo' (index.php/path)
 *  - 'querystring' (index.php?p=path)
 *  - 'auto'
 *
 * Note: Not all servers support PATH_INFO. If you're not sure, we recommend you leave this on 'auto'.
 */
$blocksConfig['urlFormat'] = 'auto';

/**
 * If you have Apache's mod_xsendfile installed and configured, set this to 'true' and @@@productDisplay@@@ will use xSendFile to transfer files.
 */
$blocksConfig['useXSendFile'] = false;

/**
 * The time a user stays logged in by default.  If set to 0, the session will expire when the browser is closed.
 * Valid units of time are:
 * m = minute(s)
 * h = hour(s)
 * d = day(s)
 */
$blocksConfig['sessionTimeout'] = '1h';

/**
 * The time a user stays logged if 'Remember Me' is checked.
 * Valid units of time are:
 * m = minute(s)
 * h = hour(s)
 * d = day(s)
 */
$blocksConfig['rememberMeSessionTimeout'] = '14d';

/**
 * Whether to remember the username of the last successful user to login on the login page.
 */
$blocksConfig['rememberUsernameEnabled'] = true;

/**
 * The amount of time we'll remember the username if 'rememberUsernameEnabled' is set to true.
 * Valid units of time are:
 * m = minute(s)
 * h = hour(s)
 * d = day(s)
 */
$blocksConfig['rememberUsernameTimeout'] = '365d';



/**
 * The length of time a newly generated email verification code will last before expiring.
 * Valid units of time are:
 * m = minute(s)
 * h = hour(s)
 * d = day(s)
 */
$blocksConfig['verificationCodeDuration'] = '24h';

/**
 * The number of invalid login attempts within the 'failedPasswordWindow' before 'failedPasswordMode' is initiated.
 */
$blocksConfig['maxInvalidPasswordAttempts'] = 5;

/**
 * Valid choices are:
 * lockout
 * cooldown
 *
 * If in 'lockout' mode, when a user reaches 'maxInvalidPasswordAttempts' within 'failedPasswordWindow', their account will be locked until an administrator manually removes the lock.
 * If in 'cooldown' mode, when a user reaches 'maxInvalidPasswordAttempts' within 'failedPasswordWindow', they will not be able to log in again for the 'failedPasswordCooldown' period.
 */
$blocksConfig['failedPasswordMode'] = 'cooldown';

/**
 * The amount of time to track failed passwords for a user.
 */
$blocksConfig['failedPasswordWindow'] = '1h';

/**
 * If 'failedPasswordMode' is in cooldown mode, if 'maxInvalidPasswordAttempts' happens within 'failedPasswordWindow', then they must wait this amount of time before they are able to log in again.
 */
$blocksConfig['failedPasswordCooldown'] = '5m';

// PHPPass Config
/**
 * Controls the number of iterations for key stretching. A setting of 8 means the hash algorithm will be applied 2^8 = 256 times.
 * This setting should be kept between 4 and 31.
 */
$blocksConfig['phpPass-iterationCount'] = 8;

/**
 * Controls whether to use the minified and merged JavaScript in the resources/scripts/uncompressed or the resources/scripts/compressed folder.
 */
$blocksConfig['useCompressedJs'] = true;

/**
 * Controls whether to add the @ symbol around translated strings to help during dubugging.
 */
$blocksConfig['translationDebugOutput'] = false;

/**
 * Error Path Keys
 * 'errorPath'      => blocks.app.templates.errors.error
 * 'error400Path'   => blocks.app.templates.errors.error400
 * 'error403Path'   => blocks.app.templates.errors.error403
 * 'error404Path'   => blocks.app.templates.errors.error404
 * 'error500Path'   => blocks.app.templates.errors.error500
 * 'error503Path'   => blocks.app.templates.errors.error503
 * 'exceptionPath'  => blocks.app.templates.errors.errorPath
 */

/**
 * Offline Path Key
 * 'offlinePath'    => blocks.app.templates._offline
 */
