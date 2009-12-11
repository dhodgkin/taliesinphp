<?php  
/**
 * Controller for the PINP app.
 *
 * @author        Damien Hodgkin <dracul01@gmail.com>
 * @copyright     Copyright (c) 2009
 */
require(TALIESIN_LIB.'/Controller.php');
class errorController extends Controller {
    protected $Command;

    public function _default() {
        echo "Something is wrong! " . $this->Command->getCommandName() . "Controller() does not exist.";
    }
    
    public function _error() {
        $params = $this->Command->getParameters();
        echo "Oops! Something is REALLY wrong! Methods: _" . $params[0] . "() and _" . $params[1] . "(), of "
            . $this->Command->getCommandName() . "Controller() do not exist.";
    }
}