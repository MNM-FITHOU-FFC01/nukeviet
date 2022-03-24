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



$page_title = 'Thêm từ';

$xtpl = new XTemplate('add_tu.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('MODULE_NAME', $module_name);

if ($nv_Request->get_title('add_new','post')) {
    $name = $nv_Request->get_title('name','post');
    $time = time();
    $nghiatu = $nv_Request->get_title('nghiatu','post');
    $loaitu = $nv_Request->get_title('loaitu','post');

    $sql_tu = "INSERT INTO `nv4_vi_tudien_tu`(`id`, `tentu`, `nghiatu`, `id_loaitu`) VALUES ('$time','$name','$nghiatu','$loaitu')";
    $res_tu = $db->query($sql_tu)->rowCount();
    if ($sql_tu > 0) {
        $xtpl->assign('mess', "Thêm dữ liệu thành công");
        $xtpl->parse('main.mess');
    }else{
        $xtpl->assign('mess', "Thêm dữ liệu không thành công");
        $xtpl->parse('main.mess');
    }

}
$sql_loaitu = "SELECT * FROM `nv4_vi_tudien_loaitudien` WHERE 1";
$res_loaitu = $db->query($sql_loaitu);

while ($res = $res_loaitu->fetch(PDO::FETCH_ASSOC)){
    // ($nv_Request->get_int('loaitu','post') == $res['id'])? $res['selected'] = "selected" : $res['selected'] = "";
    $xtpl->assign('DATA', $res);
    $xtpl->parse('main.loaitu');
}
$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
