<?php
/**
 * Redis配置
 */

if (ENVIRON == 'local') {
    return [
        'default' => [
            'host' => '127.0.0.1',
            'port' => 8888
        ],
    ];
} elseif (ENVIRON == 'test') {
    return [
        'default' => [
            'host' => '127.0.0.1',
            'port' => 8889
        ],
    ];
} else {
    return [
        'default' => [
            'host' => '127.0.0.1',
            'port' => 8889
        ],
    ];
}
