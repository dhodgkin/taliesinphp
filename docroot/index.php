<?php
/**
 * index file for TaliesinPHP(tm).
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
 * @subpackage    taliesin.docroot
 * @since         TaliesinPHP(tm) v 0.0.1
 * @version       0.0.1
 * @modifiedby    dhodgkin
 * @lastmodified  Fri Dec 11 07:48:21 2009
 */
include '../config.php';

// Get Everything running.
//include(TALIESIN_LIB.'/Command.php');
//include(TALIESIN_LIB.'/UrlParser.php');
//include(TALIESIN_LIB.'/Dispatcher.php');
//include(TALIESIN_EXTLIB.'/urlShort/shorturl.php');

//$urlParser = new UrlParser();
//$command = $urlParser->getCommand();
//$commandDispatcher = new Dispatcher($command);
//$commandDispatcher->dispatch();

//$shturl = new ShortUrl("urlDB");
//$shorty = $shturl->createShorty("http://www.google.com");
//$shortUrl = "http://".$_SERVER["HTTP_HOST"]."/.$shorty";
//echo $shortUrl;

echo "path settings: <br />";
echo "APP: " . APP . "\n<br />";

echo "TALIESIN: " . TALIESIN . "\n<br />";
echo "TALIESIN_LIB: " . TALIESIN_LIB . "\n<br />";
echo "TALIESIN_EXTLIB: " . TALIESIN_EXTLIB . "\n<br />";
echo "TALIESIN_APP: " . TALIESIN_APP . "\n<br />";
echo "TALIESIN_VIEWS: " . TALIESIN_VIEWS . "\n<br />";


echo "BASE_URL: " . BASE_URL . "\n<br />";

