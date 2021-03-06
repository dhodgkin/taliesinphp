<?php
/**
 * Dispatcher is the main class of TaliesinPHP(tm).
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
 * @subpackage    taliesin.lib
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:48:37 2009
 */
class Dispatcher {
    private $Command;

    public function Dispatcher(&$command) {
        $this->Command = $command;
    }

    private function isController($controllerName) {
        if(file_exists(TALIESIN_APP . '/controllers' . '/' . $controllerName . 'Controller.php')) {
            return true;
        } else {
            return false;
        }
    }

    public function dispatch() {
        $this->dump($this->Command, false);

        if($this->Command->getCommandName() == false) {
            $controllerName = DEFAULT_CONTROLLER;
        } else {
            $controllerName = $this->Command->getCommandName();
        }

        if($this->isController($controllerName) == false) {
            $controllerName = 'error';
        }

        include(TALIESIN_APP . '/controllers' . '/' . $controllerName . 'Controller.php');

        $controllerClass = $controllerName."Controller";
        $controller = new $controllerClass($this->Command);
        $controller->execute();
    }

    public function dump($item, $die=true) {
        $printString = '<pre>' . print_r($item, true) . '</pre>';
        if($die) {
            die($printString);
        } else {
            echo $printString;
        }
    }
}

