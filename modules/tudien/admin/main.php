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


		
$page_title = 'Từ điển';

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('MODULE_NAME', $module_name);

$link_del = "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&" . NV_OP_VARIABLE . "=del_tu";
$link_edit = "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&" . NV_OP_VARIABLE . "=add_tu"; 

if(isset($_POST['del']))
{
    $array_delete = $_POST['del'];
    $in  = str_repeat('?,', count($array_delete) - 1) . '?';
	$sql = "DELETE
					FROM `nv4_vi_tudien_tu`
					WHERE `id` IN ($in)";
	$stm = $db->prepare($sql);
	$stm->execute($array_delete);
	$data = $stm->fetchAll();
}
$sql = "SELECT tu.id, tu.tentu, tu.nghiatu, tu.id_loaitu, loaitu.tenloaitd FROM `nv4_vi_tudien_tu` as tu join nv4_vi_tudien_loaitudien as loaitu on loaitu.id = tu.id_loaitu;";
$res = $db->query($sql);
$i = 1;
while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
    $row['stt'] = $i;
    $xtpl->assign('row', $row);
    $xtpl->assign('URL_DEL_ONE', $link_del . "&id=" . $row['id']);
	$xtpl->assign('URL_EDIT', $link_edit . "&id=" . $row['id']);
    $xtpl->parse('main.row');
    $i++;

}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
