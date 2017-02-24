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
include APP_PATH . 'vendor/autoload.php';
$app = new Very\Application(APP_PATH);

$app->singleton(
    Very\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;