<?php
function fee_format($fee) {
    return number_format($fee / 100, 2);
}

//检验验证码
function check_vcode($captcha_code) {
    $session = session();
    $vcode   = $session->get('vcode');
    $vcode   = $vcode ? explode('|', $vcode) : '';
    $session->delete('vcode');

    if (!$vcode || !isset($vcode[1]) || strtolower($vcode[0]) != strtolower($captcha_code) || $vcode[1] + 60 < time()) {
        return false;
    }

    return true;
}

/**
 * 生成资源树
 *
 * @param        $items
 * @param string $id
 * @param string $pid
 * @param string $son
 *
 * @return array
 */
function get_tree($items, $id = 'cate_id', $pid = 'parent_cate_id', $son = 'cate_child')
{
    $tmpMap = array(); //临时扁平数据

    foreach ($items as $item) {
        $tmpMap[$item[$id]] = $item;
    }

    foreach ($tmpMap as $item) {
        $tmpMap[$item[$pid]][$son][$item[$id]] = &$tmpMap[$item[$id]];
    }
    return isset($tmpMap[0][$son]) ? $tmpMap[0][$son] : array();
}