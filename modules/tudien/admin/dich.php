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






$page_title = 'Dịch nghĩa từ';

$xtpl = new XTemplate('dich.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('MODULE_NAME', $module_name);

$sql_loaitu = "SELECT * FROM `nv4_vi_tudien_loaitudien` WHERE 1";
$res_loaitu = $db->query($sql_loaitu);
// pr()
while($res = $res_loaitu->fetch(PDO::FETCH_ASSOC)){
    $xtpl->assign('DATA', $res);
    $xtpl->parse('main.loaitu');
}
if (!$nv_Request->get_int( 'loaitu', 'post' )) {
    print_r("Không được bỏ trống thể loại");
}else if ($nv_Request->get_title( 'tutra', 'post' )) {
    $sql_tu = "SELECT `id`, `tentu`, `nghiatu`, `id_loaitu` FROM `nv4_vi_tudien_tu` WHERE `tentu` = '". $nv_Request->get_title( 'tutra', 'post' ) ."' AND `id_loaitu` = ". $nv_Request->get_title( 'loaitu', 'post' ) .";";
    $res_tu = $db->query($sql_tu);
    while($res = $res_tu->fetch(PDO::FETCH_ASSOC)){
        $xtpl->assign('tu', $res);
        $xtpl->parse('main.nghiatu');
    }
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
