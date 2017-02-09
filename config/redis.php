<?php
/**
 * Redis配置
 */

if (ENVIRON == 'local') {
    return [
        'default' => [
            'host'     => 'localhost',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
            'timeout'  => 1,
        ]
    ];
} elseif (ENVIRON == 'test') {
    return [
        'default' => [
            'host'     => 'localhost',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
            'timeout'  => 1,
        ]
    ];
} else {
    return [
        'default' => [
            'host'     => 'localhost',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
            'timeout'  => 1,
        ]
    ];
}
