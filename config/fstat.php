<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/2/15 下午9:30
 */

if (ENVIRON == 'local') {
    return [
        'use_db'    => 'default',
        'is_stat'   => false,
        'db_prefix' => 'test_',
        'use_redis' => 'default',
    ];
} else {
    return [
        'use_db'    => 'default',
        'is_stat'   => false,
        'db_prefix' => 'test_',
        'use_redis' => 'default',
    ];
}
