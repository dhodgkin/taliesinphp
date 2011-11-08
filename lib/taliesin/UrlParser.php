<?php
/**
 * URL Parser class for TaliesinPHP(tm).
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
 * @copyright     (C) 2009 Damien Hodgkin
 * @license       http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @package       taliesin
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:49:12 2009
 */
class UrlParser {

    function UrlParser() {
        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        $scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
        for($i= 0;$i < sizeof($scriptName);$i++) {
            if ($requestURI[$i] == $scriptName[$i]) {
                unset($requestURI[$i]);
            }
        }
        $commandArray = array_values($requestURI);
        $commandName = $commandArray[0];
        $parameters = array_slice($commandArray,1);
        $this->command = new Command($commandArray[0],$parameters);
    }

    function getCommand() {
        return $this->command;
    }
}

