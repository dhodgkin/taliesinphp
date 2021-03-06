<?php
/**
 * Command class for TaliesinPHP(tm).
 * This class takes the commands parsed from the URL and returns them.
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
 * @lastmodified  Fri Dec 11 07:48:52 2009
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

