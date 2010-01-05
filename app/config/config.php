<?php
/**
 * config file for TaliesinPHP(tm).
 *  This config file is subject to change. TaliesinPHP(tm) is undergoing heavy
 *  construction.
 *
 *  NOTE: #1 Find the best way to define the constants, not sure if using define() is the way to go.
 *
 * PHP version 5
 *
 * TaliesinPHP(tm) PHP Framework
 * Copyright 2009
 *
 * Licensed under The BSD License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author        Damien Hodgkin <dracul01@gmail.com>
 * @copyright     Copyright (c) 2009
 * @license       http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @package       taliesin
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:47:37 2009
 */

/*
    User serviceable constants.
*/
// set debugging
define('DEBUG', true);

// set paths
define('APP', '/home/damo/www/taliesinphp');
define('TALIESIN', APP.'/taliesin');
define('TALIESIN_LIB', TALIESIN.'/lib');
define('TALIESIN_EXTLIB', TALIESIN.'/extlib');
define('TALIESIN_APP',  APP.'/app');
define('TALIESIN_CONFIG', TALIESIN_APP.'/config');
define('TALIESIN_VIEWS', TALIESIN_APP.'/views');

// set default controller and actions
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_INDEX_ACTION', 'index');
define('DEFAULT_ERROR_ACTION', 'error');

// set timezone and date format, these are in php's date() format codes.
define('DATE_TZ', 'T');
define('DATE_FORMAT', 'D M j h:i:s Y');

/*
    The constants below should not need to be touched, except in extreme cases
    where the default structure of things has been changed.

    TaliesinPHP hackers should become familiar with these constants. They are
    part of the library. Although, they probably should be defined else where.
*/
define('BASE_URL',  'http://'.dirname($_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']));

