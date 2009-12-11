<?php
/**
 * View class for TaliesinPHP(tm).
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
class View {
    private $pageVars = array();
    private $view;

    public function __construct($view) {
        $viewsDirectory = TALIESIN_APP . '/views';
        $this->view = $viewsDirectory . '/' . $view . '/' . $view . 'View.php';
    }   

    public function set($var, $val) {
        $this->pageVars[$var] = $val;
    }

    public function render() {
        extract($this->pageVars);
        ob_start();
            require($this->view);
        return ob_get_clean();
    }
}
