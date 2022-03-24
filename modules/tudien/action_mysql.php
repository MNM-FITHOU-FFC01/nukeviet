<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_tu';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_loaitudien';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_loaitudien ( 
    `id` INT(11) NOT NULL , 
    `tenloaitd` VARCHAR(250) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_tu (
    `id` INT(11) NOT NULL , 
    `tentu` VARCHAR(250) NOT NULL , 
    `nghiatu` VARCHAR(250) NOT NULL , 
    `id_loaitu` INT(11) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;";


