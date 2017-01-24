<?php
/**
 * 程序入口文件
 * @author fifsky<fifsky@Qq.com>
 */
$app = include __DIR__ . '/../bootstrap.php';
$app->set('namespace', 'App');

$app->make('router')->init();