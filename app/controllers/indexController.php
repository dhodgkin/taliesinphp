<?php  
/**
 * Controller for the default app.
 *
 * @author        Damien Hodgkin <dracul01@gmail.com>
 * @copyright     Copyright (c) 2009
 */
require(TALIESIN_LIB.'/Controller.php');
class indexController extends Controller {
    public function _default() {
        echo "Worked?";
}
    
    public function _error() {
        echo "Oops!";
}
}