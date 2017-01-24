<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 fifsky@dev.ppstream.com
 * Date: 14-6-10
 * Time: 下午4:24
 */

if (ENVIRON == 'dev') {
    return array(
        'default' => array(
            'dbtype'    => 'mysql',
            'dbuser'    => 'test',
            'dbpswd'    => 'test',
            'dbname'    => 'test',
            'dbhost'    => '127.0.0.1',
            'dbcharset' => 'UTF8'
        )
    );
} else {
    return array(
        'default' => array(
            'dbtype'    => 'mysql',
            'dbuser'    => 'test',
            'dbpswd'    => 'test',
            'dbname'    => 'test',
            'dbhost'    => '127.0.0.1',
            'dbcharset' => 'UTF8'
        )
    );
}