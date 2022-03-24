<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_TUDIEN')) {
    exit('Stop!!!');
}



$page_title = 'Thêm loại từ điển';

$xtpl = new XTemplate('add.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('MODULE_NAME', $module_name);

if ($nv_Request->get_title('add_new','post')) {
    if ($nv_Request->get_title('name','post')){
        $name = $nv_Request->get_title('name','post');
        $time = time();
        $sql_loaitu = "INSERT INTO `nv4_vi_tudien_loaitudien`(`id`, `tenloaitd`) VALUES ('$time','$name')";
        $res_loaitu = $db->query($sql_loaitu)->rowCount();
        
        if ($res_loaitu > 0) {
            $xtpl->assign('mess', "Thêm dữ liệu thành công");
            $xtpl->parse('main.mess');
        }else{
            $xtpl->assign('mess', "Thêm dữ liệu không thành công");
            $xtpl->parse('main.mess');
        }
    }else{
        $xtpl->assign('mess', "Phải nhập đủ dữ liệu");
        $xtpl->parse('main.mess');
    }
}

if ($nv_Request->get_title('xoa','post')) {
    $id = $nv_Request->get_title('xoa','post');
    $sql = "DELETE FROM `nv4_vi_tudien_loaitudien` WHERE `id` = $id";
    $ress = $db->query($sql)->rowCount();
        
        if ($ress > 0) {
            $xtpl->assign('mess', "xoa dữ liệu thành công");
            $xtpl->parse('main.mess');
        }else{
            $xtpl->assign('mess', "xoa dữ liệu không thành công");
            $xtpl->parse('main.mess');
        }  
}
if ($nv_Request->get_title('sua','post')) {
    
}

$sql = "SELECT * FROM `nv4_vi_tudien_loaitudien` WHERE 1";
$res = $db->query($sql);
$i=1;
while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    $row['stt'] = $i++;
    $xtpl->assign('row', $row);
    $xtpl->parse('main.row');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
