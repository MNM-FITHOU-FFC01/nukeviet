<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv_footer_info')) {
    /**
     * nv_footer_info_config()
     *
     * @return string
     */
    function nv_footer_info_config()
    {
        global $lang_global, $data_block;

        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Tên trang:</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="tentrang" value="' . $data_block['tentrang'] . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Mô tả ngắn gọn:</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="mota" value="' . $data_block['mota'] . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Thông tin liên hệ:</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="thongtinlienhe" value="' . $data_block['thongtinlienhe'] . '"></div>';
        $html .= '</div>';
        return $html;
    }

    /**
     * nv_footer_info_submit()
     *
     * @return array
     */
    function nv_footer_info_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['tentrang'] = $nv_Request->get_title('tentrang', 'post');
        $return['config']['mota'] = $nv_Request->get_title('mota', 'post');
        $return['config']['thongtinlienhe'] = $nv_Request->get_title('thongtinlienhe', 'post');
        return $return;
    }

    /**
     * nv_footer_info()
     *
     * @param array $block_config
     * @return string
     */
    function nv_footer_info($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.footer_bottom.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.footer_bottom.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.footer_bottom.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_global);
        $tentrang= $block_config['tentrang'];
        $mota= $block_config['mota'];
        $thongtinlienhe= $block_config['thongtinlienhe'];

        $xtpl->assign('tentrang', $tentrang);
        $xtpl->assign('mota', $mota);
        $xtpl->assign('thongtinlienhe', $thongtinlienhe);

        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_footer_info($block_config);
}
