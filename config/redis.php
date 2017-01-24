<?php
/**
 * Redis配置
 */

if (ENVIRON == 'dev') {
    return array(
        'default' => array(
            '1' => array(
                'master' => '127.0.0.1:6379',
//                'slave'  => array(
//                    '127.0.0.1:6380',
//                )
            ),
        ),
    );
} elseif (ENVIRON == 'test') {
    return array(
        'default' => array(
            '1' => array(
                'master' => '127.0.0.1:6381',
//                'slave'  => array(
//                    '127.0.0.1:6380',
//                )
            ),
        ),
    );
} else {
    return array(
        'default' => array(
            '1' => array(
                'master' => '127.0.0.1:6381',
//                'slave'  => array(
//                    '127.0.0.1:6380',
//                )
            ),
        ),
    );
}
