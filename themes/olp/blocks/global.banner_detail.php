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

if (!nv_function_exists('nv_banner_detail_info')) {
    /**
     * nv_copyright_info_config()
     *
     * @return string
     */
 
    function nv_banner_detail_info_config()
    {
        global $lang_global, $data_block;
        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6"> Tiêu đề  1 : </label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="config_tieude1" value="' . nv_htmlspecialchars($data_block['tieude1']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6"> Tiêu đề  2 :</label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="config_tieude2" value="' . nv_htmlspecialchars($data_block['tieude2']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6"> Tiêu đề 3 </label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="config_tieude3" value="' . nv_htmlspecialchars($data_block['tieude3']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6"> In đỏ </label>';
        $html .= '<div class="col-sm-18"><input class="form-control" type="text" name="config_indo" value="' . nv_htmlspecialchars($data_block['indo']) . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6"> Ảnh </label>';
        $html .= '<div class="col-sm-18"><input class="w300 form-control pull-left" type="text" name="image" id="image" value="'. $data_block['image'] .'" style="margin-right: 5px"/><input type="button" value="Browse server" name="selectimg" class="btn btn-info"/></div>';
        $html .= '</div>';
        $html .= "<script>
        $('input[name=selectimg]').click(function() {
            var area = 'image'; //id của thẻ input lưu đường dẫn file
            var alt = 'imagealt'; //id của thẻ input lưu tiêu đề file
            var path = '{NV_UPLOADS_DIR}/{MODULE_UPLOAD}'; //uploads/sample
            var type = 'image'; // kiểu định dạng cho phép upload
                    var currentpath = '{NV_UPLOADS_DIR}/{MODULE_UPLOAD}/2020'; //uploads/sample/2020
     
            nv_open_browse(script_name + '?' + nv_name_variable + '=upload&popup=1&area=' + area + '&alt=' + alt + '&path=' + path + '&type=' + type + '&currentpath=' + currentpath, 'NVImg', 850, 420, 'resizable=no,scrollbars=no,toolbar=no,location=no,status=no');
     
            return false;
        });
        </script>";
        return $html;
    }

    /**
     * nv_copyright_info_submit()
     *
     * @return array
     */
    function nv_banner_detail_info_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['tieude1'] = $nv_Request->get_title('config_tieude1', 'post');
        $return['config']['tieude2'] = $nv_Request->get_title('config_tieude2', 'post');
        $return['config']['tieude3'] = $nv_Request->get_title('config_tieude3', 'post');
        $return['config']['indo'] = $nv_Request->get_title('config_indo', 'post');
        $return['config']['image'] = $nv_Request->get_title('image', 'post');
        
        return $return;
    }

    /**
     * nv_copyright_info()
     *
     * @param array $block_config
     * @return string
     */
    function nv_banner_detail_info($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.banner_detail.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.banner_detail.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.banner_detail.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_global);
        $tieude1 = $block_config['tieude1'];
        $tieude2 = $block_config['tieude2'];
        $tieude3 = $block_config['tieude3'];
        if (empty($global_config['site_banner'])) {
            $xtpl->assign('BANNER_SRC', NV_STATIC_URL . 'themes/' . $global_config['module_theme'] . '/images/header.png');
        } else {
            $xtpl->assign('BANNER_SRC', NV_BASE_SITEURL . $global_config['site_banner']);
        }
        $xtpl->assign('SITE_DESCRIPTION', $global_config['site_description']);
        $indo = $block_config['indo'];
        $image = $block_config['image'];

        $xtpl->assign('TIEUDE1', $tieude1);
        $xtpl->assign('TIEUDE2', $tieude2);
        $xtpl->assign('TIEUDE3', $tieude3);
        $xtpl->assign('INDO', $indo);
        $xtpl->assign('IMAGE', $image);

        $xtpl->parse('main');
        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_banner_detail_info($block_config);
}
