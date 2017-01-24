<?php
/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 4/14/16 00:36
 */
if (version_compare(PHP_VERSION, '5.6.4', '<')) {
    die('require PHP > 5.6.4 !');
}

define('APP_PATH', __DIR__ . DIRECTORY_SEPARATOR);

$app_env = getenv('APP_ENV');
$app_env = $app_env ? $app_env : 'pro';
$app_env = $app_env == 'local' ? 'dev' : $app_env;

define('ENVIRON', $app_env);
//define('DEBUG', true);
define('DEBUG', (ENVIRON == 'dev' || ENVIRON == 'test'));

/**
 * 是否开启debug
 */
if (DEBUG) {
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', 'On');
} else {
    error_reporting(0);
}

include APP_PATH . 'vendor/autoload.php';
$app = new Very\Application(APP_PATH);

//加载错误监控
include APP_PATH . 'helpers/error_monitor.php';

return $app;