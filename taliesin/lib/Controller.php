<?php
/**
 * Controller class for TaliesinPHP(tm).
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
abstract class Controller {
    protected $Command;
    public function Controller(&$command) {
        $this->Command = $command;
    }
 
    abstract function _default(); 
    abstract function _error();
    
    public function execute() {
        $functionToCall = $this->Command->getFunction();
        if($this->Command->getFunction() == '') {
            $functionToCall = 'default';
        }
 
        if(!is_callable(array(&$this,'_'.$functionToCall))) {
             $functionToCall = 'error';
        }
 
        call_user_func(array(&$this,'_'.$functionToCall));
    }
}