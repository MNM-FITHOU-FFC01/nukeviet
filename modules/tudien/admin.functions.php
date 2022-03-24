<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 2-10-2010 20:59
 */

if(!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN'))
	die('Stop!!!');

$submenu['add'] = "Thêm loại từ điển";
$submenu['dich'] = "Dịch nghĩa từ";

$allow_func = array( 
    'main', 'add' , 'dich' 
);
// $allow_func = array('main', 'add_ab', 'add_img', 'sort_img','copy_img', 'del_albums', 'del_lalbums', 'listimg', 'del_imgs', 'del_limgs', 'active', 'sort');

define('NV_IS_TUDIEN', true);
// pr(1);

?>