<?php
/**
 * Command class for TaliesinPHP(tm).
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
class Command {
    protected $commandName = '';
    protected $parameters = array();
             
    public function Command($commandName,$parameters) {
        $this->commandName = $commandName;
        $this->parameters = $parameters;
    }

    public function getCommandName() {
        return $this->commandName;
    }

    public function getFunction() {
        return $this->parameters[0];
    }

    public function getParameters() {
        return $this->parameters;
    }
}
