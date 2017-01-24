<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 fifsky@gmail.com
 * Date: 14/7/30
 * Time: 下午12:01
 */

function fee_format($fee) {
    return number_format($fee / 100, 2);
}