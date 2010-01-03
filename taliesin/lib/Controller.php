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
 * @copyright     (C) 2009 Damien Hodgkin
 * @license       http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @package       taliesin
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:44:59 2009
 */
abstract class Controller {
    protected $Command;
    public function Controller(&$command) {
        $this->Command = $command;
    }
    /* the default actions need to be declared in the controller which inherits
      from Controller.
    */
    abstract function index();  // default action for displaying the index.
    abstract function _error(); // default action for displaying errors.

    /**
     * function execute()
     *
     * this is where the action to use is determined.
     *
     */
    public function execute() {
        $functionToCall = $this->Command->getFunction();
        if($this->Command->getFunction() == '') {
            $functionToCall = DEFAULT_ACTION;
        }

        if(!is_callable(array(&$this,$functionToCall))) {
             $functionToCall = '_error';
        }

        call_user_func(array(&$this,$functionToCall));
    }
}

