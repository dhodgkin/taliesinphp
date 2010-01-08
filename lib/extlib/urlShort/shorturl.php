<?php
/**
 * URL Shortening class for TaliesinPHP(tm).
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
 * @modifiedby    LastChangedBy: dhodgkin
 * @lastmodified  Date: 2009-12-08 12:56:01 -0500 (Tue, 8 Dec 2009)
 */
class ShortUrl {
    var $database;

    function ShortUrl($database) {
        $this->database = $database;
    }

    function next() {
        $sequence = $this->database."/sequence";
        touch($sequence);
        $handle = fopen($sequence, "r+") or die("can't open sequence file");
        $last = fgets($handle);
        if(empty($last) && $last != "0") {
            $last = chr(47);
        }
        $next = substr_replace($last, $this->nextASCII(substr($last, -1)), -1);
        rewind($handle);
        fwrite($handle, $next);
        fclose($handle);
        return $next;
    }

    // 48-57,65-90,97-122
    function nextASCII($char) {
        $ascii = ord($char);
        if ($ascii < 48) {
            return chr(48);
        } else if ($ascii > 56 && $ascii < 65) {
            return chr(65);
        } else if ($ascii > 89 && $ascii < 97) {
            return chr(97);
        } else if ($ascii > 121) {
            return chr(122).chr(48);
        }
        $ascii += 1;
        return chr($ascii);
    }

    function createShorty($URL) {
        $shorty = $this->next();
        $path = $this->database ."/". substr($shorty, 0, 1) . ".db";
        touch($path);
        $fp = fopen($path, "a");
        fwrite($fp, $shorty . ":" . $URL . PHP_EOL);
        return $shorty;
    }

    function resolveShorty($shorty) {
        $path = $this->database ."/". substr($shorty, 0, 1) . ".db";
        touch($path);
        $fp = fopen($path, "r");
        while (!feof($fp)) {
            $line = trim(fgets($fp));
            if(strcmp($shorty, substr($line, 0, strpos($line, ":"))) == 0) {
                $url = substr($line, strpos($line, ":") + 1);
            }
        }
        fclose($fp);
        return $url;
    }
}

