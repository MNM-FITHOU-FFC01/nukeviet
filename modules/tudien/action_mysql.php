<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_TUDIEN')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

// $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_tudien';

$sql_create_module = $sql_drop_module;

// $sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_tudien (
//  id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
//  tentd varchar(250) NOT NULL,
//  kihieu varchar(250) NOT NULL,
// ) ENGINE=MyISAM";

