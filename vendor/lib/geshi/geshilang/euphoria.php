<?php
/*************************************************************************************
 * euphoria.php
 * ---------------------------------
 * Author: Damien Hodgkin (dracul01 [at] gmail [dot] com)
 * Copyright: (c) 2009  Damien Hodgkin ()
 * Release Version: 1.0.8.1
 * Date Started: 11/20/2009
 *
 * Euphoria language file for GeSHi.
 *
 * The Euphoria programming language can be found at ...
 *
 * CHANGES
 * -------
 * 11/20/2009 (GeSHi 1.0.8.1)
 *  -  First Release
 *
 * TODO (updated 11/20/2009)
 * -------------------------
 * Add full Euphoria syntax.
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Euphoria',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',

    'KEYWORDS' => array(
        1 => array(
            'as', 'break', 'case', 'do', 'else', 'elseif', 'endif',
            'endswitch', 'endwhile', 'for', 'foreach', 'if', 'include',
            'include_once', 'require', 'require_once', 'return',
            'switch', 'while'
        ),
        2 => array(
            '&lt;/script>', '&lt;?', '&lt;?php', '&lt;script language=',
            '?>', 'class', 'default', 'DEFAULT_INCLUDE_PATH', 'E_ALL',
            'E_COMPILE_ERROR', 'E_COMPILE_WARNING', 'E_CORE_ERROR',
            'E_CORE_WARNING', 'E_ERROR', 'E_NOTICE', 'E_PARSE',
            'E_USER_ERROR', 'E_USER_NOTICE', 'E_USER_WARNING',
            'E_WARNING', 'false', 'function', 'new', 'null',
            'PEAR_EXTENSION_DIR', 'PEAR_INSTALL_DIR', 'PHP_BINDIR',
            'PHP_CONFIG_FILE_PATH', 'PHP_DATADIR', 'PHP_EXTENSION_DIR',
            'PHP_LIBDIR', 'PHP_LOCALSTATEDIR', 'PHP_OS',
            'PHP_OUTPUT_HANDLER_CONT', 'PHP_OUTPUT_HANDLER_END',
            'PHP_OUTPUT_HANDLER_START', 'PHP_SYSCONFDIR', 'PHP_VERSION',
            'true', 'var', '__CLASS__', '__FILE__', '__FUNCTION__',
            '__LINE__', '__METHOD__'
        ),
        3 => array(
            'xml_parser_create', 'xml_parser_create_ns',
            'xml_parser_free', 'xml_parser_get_option',
            'xml_parser_set_option', 'xml_parse_into_struct',
            'xml_set_character_data_handler', 'xml_set_default_handler',
            'xml_set_element_handler',
            'xml_set_end_namespace_decl_handler',
            'xml_set_external_entity_ref_handler',
            'xml_set_notation_decl_handler', 'xml_set_object',
            'xml_set_processing_instruction_handler',
            'xml_set_start_namespace_decl_handler',
            'xml_set_unparsed_entity_decl_handler', 'yp_all', 'yp_cat',
            'yp_errno', 'yp_err_string', 'yp_first',
            'yp_get_default_domain', 'yp_master', 'yp_match', 'yp_next',
            'yp_order', 'zend_logo_guid', 'zend_version',
            'zlib_get_coding_type'
        )
    ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']', '{', '}'),
        1 => array('!', '@', '|', '&'),
        2 => array('+', '-', '*', '/', '%'),
        3 => array('=', '&lt;', '>')
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
        ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #808080; font-style: italic;',
        'MULTI' => 'color: #808080; font-style: italic;'
        ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
        ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
        ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
        ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
        ),
        'METHODS' => array(
        ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
        ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;'
        ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
        )
    ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
    ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
    ),
    'REGEXPS' => array(
    ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
    ),
    'TAB_WIDTH' => 8
);
?>
