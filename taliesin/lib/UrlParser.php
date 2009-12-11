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
 * @copyright     Copyright (c) 2009
 * @license       http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @package       taliesin
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    LastChangedBy: dhodgkin
 * @lastmodified  Date: 2009-12-08 12:56:01 -0500 (Tue, 8 Dec 2009)
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

