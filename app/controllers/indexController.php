<?php  
/**
 * Controller for the default app.
 *
 * @author        Damien Hodgkin <dracul01@gmail.com>
 * @copyright     Copyright (c) 2009
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:46:17 2009
 */
require(TALIESIN_LIB.'/Controller.php');
class indexController extends Controller {
    public function _index() {
        echo "Worked?";
}
    
    public function _error() {
        echo "Oops!";
}
}