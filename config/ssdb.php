<?php
/**
 * Redis配置
 */

if (ENVIRON == 'local') {
    return [
        'pay' => [
            'host' => '127.0.0.1',
            'port' => 8888
        ],
    ];
} elseif (ENVIRON == 'test') {
    return [
        'pay' => [
            'host' => '127.0.0.1',
            'port' => 8889
        ],
    ];
} else {
    return [
        'pay' => [
            'host' => '127.0.0.1',
            'port' => 8889
        ],
    ];
}
