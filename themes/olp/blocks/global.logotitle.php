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

if (!nv_function_exists('nv_menu_theme_logotitle')) {
    /**
     * nv_menu_theme_demo_config()
     *
     * @param string $module
     * @param array  $data_block
     * @param array  $lang_block
     * @return string
     */
    // function nv_menu_theme_demo_config($module, $data_block, $lang_block)
    // {
    //     $html = '<div class="form-group">';
    //     $html .= '	<label class="control-label col-sm-6">Hướng chạy:</label>';
    //     $html .= '	<div class="col-sm-18">
    //                     <select class="form-control" name="config_direction" value='.$data_block['config_direction'].'>
    //                         <option value="left">left</option>
    //                         <option value="right">right</option>
    //                         <option value="up">up</option>
    //                         <option value="down">down</option>

    //                     </select>
    //                 </div>';
    //     $html .= '</div>';

    //     return $html;
    // }

    /**
     * nv_menu_theme_demo_submit()
     *
     * @param string $module
     * @param array  $lang_block
     * @return array
     */
    function nv_menu_theme_logotitle_submit($module, $lang_block)
    {
        global $nv_Request;
        $return = [];
        $return['error'] = [];
        $return['config']['config_direction'] = $nv_Request->get_title('config_direction', 'post');
        return $return;
    }

    /**
     * nv_menu_theme_logotitle()
     *
     * @param array $block_config
     * @return string
     */
    function nv_menu_theme_logotitle($block_config)
    {
        global $global_config, $site_mods, $lang_global;
        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.logotitle.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.logotitle.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }
        $xtpl = new XTemplate('global.logotitle.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('NV_SITE_NAME', $global_config['site_name']);
        $xtpl->assign('LOGO_SRC', NV_BASE_SITEURL . $global_config['site_logo']);
        $xtpl->parse('main');
        return $xtpl->text();
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_menu_theme_logotitle($block_config);
}
