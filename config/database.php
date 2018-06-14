<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 fifsky@dev.ppstream.com
 * Date: 14-6-10
 * Time: 下午4:24
 */

if (ENVIRON == 'local') {
    return [
        'default' => [
            'driver'   => 'mysql',
            'username' => 'root',
            'password' => '123456',
            'database' => 'test',
            'host'     => 'localhost',
            'port'     => 3306,
            'chatset'  => 'UTF8',
        ],
    ];
} else {
    return [
        'default' => [
            'driver'   => 'mysql',
            'username' => 'test',
            'password' => '123456',
            'database' => 'test',
            'host'     => '127.0.0.1',
            'port'     => 3306,
            'chatset'  => 'UTF8',
        ]
    ];
}