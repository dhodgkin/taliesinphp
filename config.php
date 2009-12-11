<?php 
/**
 * config file for TaliesinPHP(tm).
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
    This config file is subject to change. TaliesinPHP(tm) is undergoing heavy
    construction.
*/
define('DEBUG', true);

define('TALIESIN_LIB', dirname(__FILE__).'/taliesin/lib');
define('TALIESIN_APP',  dirname(__FILE__).'/app');

define('BASE_URL',  'http://'.dirname($_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']));

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_ACTION', 'index');
