<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 15/2/16 下午9:38
 */

//php错误处理
function __php_error_handler__($errno, $errstr, $errfile, $errline)
{
    try {
        switch ($errno) {
            case E_NOTICE:
            case E_USER_NOTICE:
            case E_STRICT:
                return;
        }
        if ($errstr == 'Division by zero') {
            return;
        }
        if ($errstr == 'Invalid argument supplied for foreach()') {
            return;
        }
        if (strpos($errstr, 'current()') === 0) {
            return;
        }
        if (strpos($errstr, 'next()') === 0) {
            return;
        }
        if (strpos($errstr, 'ftp_mkdir()') === 0) {
            return;
        }
        if (strpos($errstr, 'UTF-8 sequence') !== false) {
            return;
        }
        if (strpos($errstr, 'imagecreatefromstring') !== false) {
            return;
        }
        if (strpos($errstr, 'fopen(') !== false) {
            $errstr = preg_replace("#fopen\((.*)\)#", "[file]", $errstr);
        }

        mstat()->set(1, 'BUG错误', "PHP错误", "file:{$errfile} | line:{$errline}", "Error Info:<br/>\n" . $errstr, 100);
        $error = func_get_args();
        unset($error[4]);
        logger()->error('PHP Error', $error);

        if (strpos($errstr, 'simplexml_load_string') !== false) {
            logger()->error('PHP Error', $_SERVER);
            logger()->error('PHP Error', debug_backtrace());
        }
    } catch (Exception $e) {
    }
}

register_shutdown_function(function () {
    $last_error = error_get_last();
    if ($last_error) {
        __php_error_handler__($last_error['type'], $last_error['message'], $last_error['file'], $last_error['line']);
    }
    if ($_SERVER['REQUEST_TIME'] || $_SERVER['REQUEST_TIME_FLOAT']) {
        $start_time = $_SERVER['REQUEST_TIME_FLOAT'] ? $_SERVER['REQUEST_TIME_FLOAT'] : $_SERVER['REQUEST_TIME'];
        $uri        = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        mstat()->set(1, '程序执行效率', mstat()->diffTime($start_time), $uri);
    }
});

set_error_handler('__php_error_handler__');