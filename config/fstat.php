<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/2/15 下午9:30
 */

if (ENVIRON == 'dev') {
    return [
        'use_db'       => 'stat',
        'is_stat'      => true,
        'db_prefix'    => 'test_',
        'redis_config' => [
            'host'    => '127.0.0.1',
            'port'    => '6379',
            'timeout' => 0.1,
        ]
    ];
} else {
    return [
        'use_db'       => 'stat',
        'is_stat'      => true,
        'db_prefix'    => 'test_',
        'redis_config' => [
            'host'    => '127.0.0.1',
            'port'    => '6379',
            'timeout' => 0.1,
        ]
    ];
}
